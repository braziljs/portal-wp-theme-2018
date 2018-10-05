# BrazilJS portal Wordpress theme

In 2018 we launched our new brand and a new website.  
BrazilJS' portal is using Wordpress as platform, so our new look is basically a new WP theme.  
As it's based on our previous theme, it has a lot workarounds.  


## rsync:

### HML

$ rsync -r --exclude="/braziljs-portal-theme/.*" --exclude="/braziljs-portal-theme/node_modules" --exclude="/braziljs-portal-theme/dev" ./braziljs-portal-theme braziljs-hml:/var/www/html/braziljs/wp-content/themes


### PROD

$ rsync -r --exclude="/braziljs-portal-theme/.*" --exclude="/braziljs-portal-theme/node_modules" --exclude="/braziljs-portal-theme/dev" ./braziljs-portal-theme braziljs-wp:/var/www/html/wp-content/themes

