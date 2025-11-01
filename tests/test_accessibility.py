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
