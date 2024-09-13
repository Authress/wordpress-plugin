=== SSO Login - Universal (OAuth + SAML) ===
Contributors: authress
Tags: Login, SSO, OAuth, SAML, Single Sign-on
Requires at least: 5.5
Requires PHP: 8.2
Tested up to: 6.6
Stable tag: {{VERSION}}
License: Apache-2.0
License URI: https://github.com/Authress/wordpress-sso-login/blob/main/LICENSE

SSO Login provides user login, business authentication, SSO, Social login, and Single Sign-On for all sites.

== Description ==

This plugin upgrades the standard **WordPress login** forms with one powered by [Authress](https://authress.io) that enables:

- **Universal authentication**
    - Over 40 social login providers
    - Enterprise connections (SAML, Office 365, Google Apps, and more)
    - Customer configurable SSO connections
- **Ultra secure**
    - User identity
    - Security access policies
    - Mitigate brute force attacks

Which includes:
- Azure AD and B2C
- Office 365
- WSO2
- Ping Identity
- Okta
- Auth0
- Keyclock
- LinkedIn
- Salesforce
- Twitter
- Google Workspace
- Yahoo
- Salesforce
- Hubspot
- Steam
- Slack
- And any custom OAuth2.1, OpenID, or SAML provider

With **SSO Login**, you can automatically support business and enterprise customers that have important security requirements for their users to use your site and platform.

== Installation ==

This plugin requires an [Authress account](https://authress.io).

1. [Sign up here](https://authress.io/app/#/signup).
2. Follow the installation instructions the WordPress plugin during installation.
3. Navigate to the `Plugins` WordPress menu tab, select `Authress` and click `Activate`.

== Technical Notes ==
By using this plugin you are delegating the site authentication and profile handling to Authress. That means that you won't need to use the WordPress database to authenticate users and the default WordPress login forms will be upgraded to support the new SSO Login flow.

Please see our [knowledge base](https://authress.io/knowledge-base/) for more information on how Authress authenticates and manages your users.

= Migrating Existing Users =

Authress allows multiple authentication providers. You can have social providers like Facebook, Twitter, Google+, a database of users and passwords (just like WordPress), or you can use an Enterprise directories like, Office365, Google Apps, SAML, OpenID, OAuth2.1. All those authentication providers are supported and more.

== Frequently Asked Questions ==

= Can I customize the Authress login? =

The Authress login widget is completely configurable and it's [open source on GitHub](https://github.com/Authress/wordpress-sso-login). You can style the form like any of your site components by enqueuing a stylesheet in your theme. Use the [`login_enqueue_scripts`](https://developer.wordpress.org/reference/hooks/login_enqueue_scripts/) hook to style the form on wp-login.php, [`wp_enqueue_scripts`](https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/) to style widgets and shortcodes, or both to affect the form in all locations.


= Which authentication providers are supported? =

All social providers and business login directories are supported. For more details, please see [configuring social and enterprise authentication providers](https://authress.io/knowledge-base/user-oauth-authentication-quick-start).


= Didn't find what you were looking for? =

No problem, you can directly connect with the Authress development team in our [user community](https://authress.io/community), and we'll help you get squared away.


== Screenshots ==

1. Authress managed login page.
2. Enable your users to login with their email for any domain.
3. Support security keys for Passkeys and MFA.

== How to customize this plugin ==

This plugin provides extension points to make it easier to configure it exactly as you need. Check out the full docs:
* [SSO Login customizations](https://github.com/Authress/wordpress-sso-login/blob/main/docs/customizations.md)

== Changelog ==

[Complete list of changes for this and other releases](https://github.com/Authress/wordpress-sso-login)

= 0.2 =
* Added additional support for Google and GitHub SSO.
* Enabled custom configuration of the login form via standard WordPress hooks.
