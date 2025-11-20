#!/usr/bin/env bash
set -euo pipefail

status=0
while IFS= read -r -d '' file; do
  if ! php -l "$file" >/dev/null; then
    status=1
  fi
done < <(find . -path './node_modules' -prune -o -type f -name "*.php" -print0)

exit $status
