
### Development

1. Install Docker
[Install Docker](https://docs.docker.com/engine/install/ubuntu/#install-using-the-repository)
```sh
sudo snap install docker
```

2. install PHP
```sh
sudo apt install php-xmlwriter php-cli php-curl php-mbstring docker-compose-plugin
./composer.phar install --prefer-dist --optimize-autoloader
```


* [Using Subversion with the WordPress Plugin Directory](https://developer.wordpress.org/plugins/wordpress-org/how-to-use-subversion/)
* [FAQ about the WordPress Plugin Directory](https://developer.wordpress.org/plugins/wordpress-org/plugin-developer-faq/)
* [WordPress Plugin Directory readme.txt standard](https://wordpress.org/plugins/developers/#readme)
* [A readme.txt validator](https://wordpress.org/plugins/developers/readme-validator/)
* [Plugin Assets (header images, etc)](https://developer.wordpress.org/plugins/wordpress-org/plugin-assets/)
* [WordPress Plugin Directory Guidelines](https://developer.wordpress.org/plugins/wordpress-org/detailed-plugin-guidelines/)
* [Block Specific Plugin Guidelines](https://developer.wordpress.org/plugins/wordpress-org/block-specific-plugin-guidelines/)

### Running the plugin
* `yarn build`
* `yarn start`
* Login and go to the Plugins page and click `Activate` on the Authress settings screen.


### Testing
To test login, navigate to `http://localhost:8080/wp-login.php`
* The default login credentials as `admin` - `admin`
Likewise the admin menu is at: `http://localhost:8080/wp-admin.php`

### WordPress related documented for custom integrations
* [add_action / add_filter](https://developer.wordpress.org/apis/hooks/filter-reference/#redirect-rewrite-filters)

### Files

* /templates
    * authress-login-form.php - UI mask for the login box
* /lib
    * Authress_Sso_Login_LoginManager.php - Logic for handling authentication
* /wordpress
    * Configuration files for the WordPress plugin on WordPress.org
 
### Wordpress Plugin Management
* [Authress WordPress Plugin Login](https://profiles.wordpress.org/authress/)
