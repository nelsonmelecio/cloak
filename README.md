<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## Cloak field names with dynamic strings 

Adding an alias names to field names when rendering a form in the view to add more layer of security.

When creating a form, we usually expose the exact field names of each inputs inside the form, giving ways to a potential hackers to get a grasp of our table structures specially the field names.

The procedures which I did here might not be very useful at all cases but it can add another layer of security to your forms particularly when you are dealing with sensitive data like user credit card details.

So what I did is to cloak the field names with a coded alias name which are generated randomly or by using a specific algorithm and use that as part of the form request and with validation.

You can test it here: https://cloak.nelsonmelecio.com/

