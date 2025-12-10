import unittest
from pathlib import Path
from xml.dom import minidom

ROOT = Path(__file__).resolve().parents[1]
FIXTURE = ROOT / "tests" / "fixtures" / "front-page.html"
STYLE_PATH = ROOT / "style.css"
SCRIPT_PATH = ROOT / "assets" / "js" / "site.js"


class FrontPageAccessibilityTests(unittest.TestCase):
    @classmethod
    def setUpClass(cls):
        cls.document = minidom.parse(str(FIXTURE))

    def test_hero_section_has_primary_heading(self):
        hero = self._get_section("homepage-hero")
        headings = hero.getElementsByTagName("h1")
        self.assertGreater(len(headings), 0, "Hero section should include an H1 heading")
        self.assertEqual(headings[0].getAttribute("id"), "hero-title")

    def test_product_grid_has_accessible_landmarks(self):
        grid = self._get_section("featured-products")
        self.assertEqual(grid.getAttribute("tabindex"), "-1")
        header = grid.getElementsByTagName("h2")
        self.assertGreater(len(header), 0)
        region_containers = grid.getElementsByTagName("div")
        region_roles = [node.getAttribute("role") for node in region_containers]
        self.assertIn("region", region_roles)
        aria_live = [node.getAttribute("aria-live") for node in region_containers if node.getAttribute("role") == "region"]
        self.assertIn("polite", aria_live)

    def test_skip_link_targets_product_grid(self):
        links = self.document.getElementsByTagName("a")
        skip_links = [link for link in links if link.getAttribute("href") == "#featured-products"]
        self.assertGreaterEqual(len(skip_links), 1, "Expected a skip link pointing to featured products")

    def test_collections_have_images_with_alt_text(self):
        cards = self.document.getElementsByTagName("article")
        spotlight_cards = [card for card in cards if card.getAttribute("class") == "collection-card"]
        self.assertGreater(len(spotlight_cards), 0)
        for card in spotlight_cards:
            images = card.getElementsByTagName("img")
            self.assertGreater(len(images), 0)
            for image in images:
                alt_text = image.getAttribute("alt")
                self.assertTrue(alt_text, "Collection imagery should include descriptive alt text")

    def test_newsletter_form_is_labeled(self):
        forms = self.document.getElementsByTagName("form")
        newsletter_forms = [form for form in forms if form.getAttribute("class") == "newsletter__form"]
        self.assertEqual(len(newsletter_forms), 1, "Newsletter form should exist")
        form = newsletter_forms[0]
        labels = form.getElementsByTagName("label")
        self.assertGreater(len(labels), 0)
        input_elements = form.getElementsByTagName("input")
        self.assertGreater(len(input_elements), 0)
        input_id = input_elements[0].getAttribute("id")
        referenced_label = [label for label in labels if label.getAttribute("for") == input_id]
        self.assertGreater(len(referenced_label), 0, "Email field should be associated with a label")

    def _get_section(self, section_id):
        sections = self.document.getElementsByTagName("section")
        for section in sections:
            if section.getAttribute("id") == section_id:
                return section
        raise AssertionError(f"No section found with id {section_id}")


class StylesheetRegressionTests(unittest.TestCase):
    def test_reduced_motion_rules_present(self):
        css = STYLE_PATH.read_text(encoding="utf-8")
        self.assertIn(".prefers-reduced-motion", css, "Expected reduced motion guard in base stylesheet")

    def test_focus_styles_present(self):
        css = STYLE_PATH.read_text(encoding="utf-8")
        self.assertIn("user-is-tabbing", css, "Focus-visible helper class missing")


class ScriptBehaviourTests(unittest.TestCase):
    def setUp(self):
        self.script = SCRIPT_PATH.read_text(encoding="utf-8")

    def test_prefers_reduced_motion_class_toggle(self):
        self.assertIn("prefers-reduced-motion", self.script)

    def test_skip_link_focus_management(self):
        self.assertIn("destination.focus", self.script)
        self.assertIn("scrollIntoView", self.script)


if __name__ == "__main__":
    unittest.main()
