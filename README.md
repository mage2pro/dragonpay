This extension integrates a Magento 2 based webstore with the **[Dragonpay](https://www.dragonpay.ph)** payment service (Philippines).

## Screenshots
- [The Magento 2 backend settings](https://mage2.pro/t/topic/4267).
- [The test mode](https://mage2.pro/t/topic/4285).

## How to buy
You can buy it with PayPal [here](https://mage2.pro/t/3656).   

## How to install
### 1. Free installation service
Just order my [free installation service](https://mage2.pro/t/3585).

### 2. Self-installation
```
bin/magento maintenance:enable
rm -f composer.lock
composer clear-cache
composer require mage2pro/dragonpay:*
bin/magento setup:upgrade
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f en_US <additional locales, e.g.: fil_PH>
bin/magento maintenance:disable
bin/magento cache:enable
```
If you have problems with these commands, please check the [detailed instruction](https://mage2.pro/t/263).

### How to update
```
bin/magento maintenance:enable
composer remove mage2pro/dragonpay
rm -f composer.lock
composer clear-cache
composer require mage2pro/dragonpay:*
bin/magento setup:upgrade
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f en_US <additional locales, e.g.: fil_PH>
bin/magento maintenance:disable
bin/magento cache:enable
```

## Licensing
It is a paid extension, not free.  
You can use it for free for the testing puproses only.  
Please read the [testing policy](https://mage2.pro/t/2590) before installation.

## Support
- [The extension's **forum** branch](https://mage2.pro/c/extensions/dragonpay).
- [Where and how to report a Mage2.PRO extension's issue?](https://mage2.pro/t/2034)
- I also provide a **[generic Magento 2 support](https://mage2.pro/t/755)** and [Magento 2 installation service](https://mage2.pro/t/748).

## Want to be notified about the extension's updates?
- [Subscribe](https://mage2.pro/t/2540) to the extension's [forum branch](https://mage2.pro/c/extensions/dragonpay).
- Subscribe to my [Twitter](https://twitter.com/mage2_pro) and [YouTube](https://www.youtube.com/channel/UCvlDAZuj01_b92pzRi69LeQ) channels.

## Need a new feature?
I provide the [**customization service**](https://mage2.pro/t/2020) for my payment extensions.

## Need another payment extension for Magento 2?

- «[**2Checkout**](https://mage2.pro/c/extensions/2checkout)» payment extension.
- «[**歐付寶 O'Pay (allPay)**](https://mage2.pro/c/extensions/allpay)» payment extension (Taiwan).
- «[**Checkout.com**](https://mage2.pro/c/extensions/checkout-com)» payment extension.
- «[**Dragonpay**](https://mage2.pro/c/extensions/dragonpay)» payment extension (Philippines).
- «[**Ginger Payments**](https://mage2.pro/c/extensions/ginger-payments)» extension (the Netherlands, Belgium).
- «[**iPay88**](https://mage2.pro/c/extensions/ipay88)» payment extension (Malaysia, Indonesia, Philippines, Thailand, Singapore, China).
- «[**Kassa Compleet**](https://mage2.pro/c/extensions/kassa-compleet)» payment extension by ING Bank (the Netherlands).
- «[**Moip**](https://mage2.pro/c/extensions/moip)» payment extension (Brazil).
- «[**Omise**](https://mage2.pro/c/extensions/omise)» payment extension (Thailand, Japan).
- «[**Paymill**](https://mage2.pro/c/extensions/paymill)» payment extension (the European Union).
- «[**PayPal**](https://mage2.pro/c/extensions/paypal)»: an alternative module you can get fast support and customizations for.
- «[**PostFinance**](https://mage2.pro/c/extensions/postfinance)» payment extension (Switzerland).
- «[**QIWI Wallet**](https://mage2.pro/c/extensions/qiwi)» (QIWI Кошелёк) payment extension (Russia).
- «[**Robokassa**](https://mage2.pro/c/extensions/robokassa)» payment extension (Russia).
- «[**SecurePay**](https://mage2.pro/c/extensions/securepay)» payment extension (Australia).
- «[**Spryng**](https://mage2.pro/c/extensions/spryng)» payment extension (the European Union).
- «[**Square**](https://mage2.pro/c/extensions/square)» payment extension (USA, Canada).
- «[**Stripe**](https://mage2.pro/c/stripe)» payment extension.
- «[**Yandex.Kassa**](https://mage2.pro/c/extensions/yandex-kassa)» (as known as Yandex.Checkout, Яндекс.Касса) payment extension (Russia, Armenia, Azerbaijan, Belarus, Georgia, Kazakhstan, Kyrgyzstan, Latvia, Moldova, Tajikistan).

## See also my integrations between Magento 2 and a third-party business software (ERP, CRM, accounting, inventory, etc.):
- «[**Microsoft Dynamics 365**](https://mage2.pro/c/extensions/dynamics365)» (an integration with the ERP/CRM software).
- «[**Salesforce**](https://mage2.pro/c/extensions/salesforce)» (an integration with the CRM software).
- «[**Zoho CRM**](https://mage2.pro/c/extensions/zoho-crm)».
- «[**Zoho Inventory**](https://mage2.pro/c/extensions/zoho-inventory)».
- «[**Zoho Books**](https://mage2.pro/c/extensions/zoho-books)» (an accounting software).
- «[**1C:Enterprise**](https://github.com/mage2pro/1c)» (a Russian ERP software, модуль Magento 2 для интеграции с 1С:Предприятие).
- «[**МойСклад**](https://github.com/mage2pro/moysklad)» (a Russian ERP software, модуль Magento 2 для интеграции с МойСклад).

## See also my integrations between Magento 2 and marketplaces
- «[**Etsy**](https://mage2.pro/c/extensions/etsy)» (focused on handmade or vintage items and supplies, as well as unique factory-manufactured items).
- «[**MercadoLibre**](https://mage2.pro/c/extensions/mercadolibre)» (Argentina, Bolivia, Brazil, Chile, Colombia, Costa Rica, Dominican Republic, Ecuador, Guatemala, Honduras, Mexico, Nicaragua, Panama, Paraguay, Peru, Portugal, Salvador, Uruguay, Venezuela).
- «[**Яндекс.Маркет**](https://github.com/mage2pro/yandex-market)» (a Russian marketplace, модуль Magento 2 для интеграции с Яндекс.Маркет).

## See also my other Magento 2 extensions:

- «[**Backend Login with Google Account**](https://mage2.pro/c/extensions/google-backend-login)» (a single sign-on extension for the Magento 2 backend). 
- «[**Blackbaud NetCommunity**](https://mage2.pro/c/extensions/blackbaud-netcommunity)» (an integration with an online fundraising software).  
- «[**Facebook Like & Share**](https://mage2.pro/c/extensions/facebook-like)» (shows the Facebook's «Like» and «Share» buttons on the frontend product pages).
- «[**Facebook Login**](https://mage2.pro/c/extensions/facebook-login)» (a single sign-on extension).
- «[**Login with Amazon**](https://mage2.pro/c/extensions/amazon-login)» (a single sign-on extension). 
- «[**Markdown Editor**](https://mage2.pro/c/extensions/markdown)» (an alternative content editor for the Magento 2 backend).
- «[**Price Format**](https://mage2.pro/c/extensions/price-format)» (set a custom display format for the prices and other currency values: discounts, taxes, sales amounts).
- «[**Russian language package**](https://mage2.pro/c/extensions/ru)» (русификатор для Magento 2).
- «[**Sales Documents Numeration**](https://mage2.pro/c/extensions/sales-documents-numeration)» (use a custom numeration for the sales documents: orders, invoices, shipments, and credit memos).
- «[**Twitter Timeline**](https://mage2.pro/c/extensions/twitter-timeline)» (shows your latest tweets in your store's frontend sidebar).

## Need a custom payment extension?
I provide a [custom payment gateway integration service](https://mage2.pro/t/917).

## Want to get the full rights on my extension?
It is possible: the price depends on an extension and starts from $6.990.  
You will get free lifetime support, updates, and installation service for all your clients.


