#!/usr/bin/env bash
set -euo pipefail

scripts/lint-php.sh
node --check assets/js/site.js
python -m unittest discover -s tests -p 'test_*.py'
