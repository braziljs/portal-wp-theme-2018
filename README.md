# braziljs-wp-portal

## rsync:

$ rsync -r --exclude="/braziljs-portal-theme/.*" --exclude="/braziljs-portal-theme/node_modules" --exclude="/braziljs-portal-theme/dev" ./braziljs-portal-theme braziljs-hml:/var/www/html/braziljs/wp-content/themes


$ rsync -r --exclude="/braziljs-portal-theme/.*" --exclude="/braziljs-portal-theme/node_modules" --exclude="/braziljs-portal-theme/dev" ./braziljs-portal-theme braziljs-wp:/var/www/html/

