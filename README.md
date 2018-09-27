# braziljs-wp-portal

## rsync:

### HML

$ rsync -r --exclude="/braziljs-portal-theme/.*" --exclude="/braziljs-portal-theme/node_modules" --exclude="/braziljs-portal-theme/dev" ./braziljs-portal-theme braziljs-hml:/var/www/html/braziljs/wp-content/themes


### PROD

$ rsync -r --exclude="/braziljs-portal-theme/.*" --exclude="/braziljs-portal-theme/node_modules" --exclude="/braziljs-portal-theme/dev" ./braziljs-portal-theme braziljs-wp:/var/www/html/wp-content/themes

