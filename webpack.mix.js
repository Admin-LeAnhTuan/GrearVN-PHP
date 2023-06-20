// const { assertSupportedNodeVersion } = require('../src/Engine');
const mix = require('laravel-mix')
// module.exports = async () => {
//     // @ts-ignore
//     process.noDeprecation = true;

//     // assertSupportedNodeVersion();

//     const mix = require('../src/Mix').primary;

//     require(mix.paths.mix());

//     await mix.installDependencies();
//     await mix.init();

//     return mix.build();
// };

mix.sass('resources/css/app.scss', 'public/assets/clients/css/')
mix.js('resources/js/app.js', 'public/assets/clients/js/')
mix.sass('resources/css/home.scss', 'public/assets/clients/css/')
mix.js('resources/js/home.js', 'public/assets/clients/js/')
mix.sass('resources/css/auth/login.scss', 'public/assets/clients/css/')
mix.js('resources/js/auth/login.js', 'public/assets/clients/js/')
mix.sass('resources/css/auth/register.scss', 'public/assets/clients/css/')
mix.js('resources/js/auth/register.js', 'public/assets/clients/js/')
mix.sass('resources/css/auth/user.scss', 'public/assets/clients/css/')
mix.js('resources/js/auth/user.js', 'public/assets/clients/js/')



// component
mix.sass('resources/css/auth/manage.scss', 'public/assets/clients/css/')
mix.js('resources/js/auth/manage.js', 'public/assets/clients/js/')
mix.sass('resources/css/components/banner.scss', 'public/assets/clients/css/')
mix.js('resources/js/components/banner.js', 'public/assets/clients/js/')
mix.sass('resources/css/components/featured-product.scss', 'public/assets/clients/css/')
mix.js('resources/js/components/featured-product.js', 'public/assets/clients/js/')

mix.sass('resources/css/components/success.scss', 'public/assets/clients/css/')
mix.js('resources/js/components/success.js', 'public/assets/clients/js/')
mix.sass('resources/css/product/detail.scss', 'public/assets/clients/css/')
mix.js('resources/js/product/detail.js', 'public/assets/clients/js/')
mix.sass('resources/css/product/cart.scss', 'public/assets/clients/css/')
mix.js('resources/js/product/cart.js', 'public/assets/clients/js/')

mix.js('resources/js/product/manage-category.js', 'public/assets/clients/js/')
mix.js('resources/js/product/manage-product.js', 'public/assets/clients/js/')


