# Geiriau Caneuon

[geiriaucaneuon.cymru](http://geiriaucaneuon.cymru/)

Gweler y trydar gwreiddiol: https://twitter.com/ywsgwynedd/status/903236416381100032

Pwrpas y project hwn yw: 

1. Cadw trefn ar yr holl lyrics, yr artistiaid a'u lluniau
2. Anfon lyric ar hap i'r cyfri trydar
3. Derbyn awgrymiadau gan y cyhoedd

Mae'r app wedi'i seilio ar osodiad sylfaenol o [Laravel](https://laravel.com/), felly'n rhedeg ar PHP gyda MySQL fel bas data. 

### Y Cod

Y lle gorau i ddechrau yw'r ffeil `routes/web.php`. Mae'n cynnwys holl URIs yr app, ac yn dangos i ble y anfonir y gorchmynion HTTP. 

Mae'r Controllers i gyd yn y ffolder `app/Http/Controllers`, sydd yn rheoli'r rhesymeg. 

#### Y Trydar

Anfonir y trydar gyda gorchymyn. Mae'r rhain yn `app/Console/Commands`. 

Mae'r command TweetRandom yn cael ei redeg pob pum munud (via `app/Console/Kernel.php`), ac yn perfformio dwy dasg: 

1. Checio os oes dwy awr wedi pasio ers y tweet diwethaf
2. Taflu deis 180 ochr a checio am 40

Os teflir 40, yna gelwir TweetPost i baratoi y neges. 

Mae TweetPost yn galw TweetImage i anfon y llun i API Twitter a dychwelyd y canlyniad yn ol, cyn anfon y trydar terfynol. 

[@meigwilym](https://twitter.com/meigwilym)

