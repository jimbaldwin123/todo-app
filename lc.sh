set -x
_now=$(date +"%Y-%m-%d_%H:%M:%S")
_file="public/css/app_$_now.bak"
mv public/css/app.css "$_file"
lessc resources/assets/less/app.less > "public/css/app.css"
