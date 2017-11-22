# Geiriau Caneuon

[geiriaucaneuon.cymru](http://geiriaucaneuon.cymru/)

Gweler y trydar gwreiddiol: https://twitter.com/ywsgwynedd/status/903236416381100032

Pwrpas y project hwn yw: 

1. Cadw trefn ar yr holl lyrics, yr artistiaid a'u lluniau
2. Anfon lyric ar hap i'r cyfri trydar
3. Derbyn awgrymiadau gan y cyhoedd

Mae'r app wedi'i seilio ar osodiad sylfaenol o Laravel, felly'n rhedeg ar PHP gyda MySQL fel bas data. 

### Y Cod

Y lle gorau i ddechrau yw'r ffeil `routes/web.php`. Mae'n cynnwys holl URIs yr app, ac yn dangos ble mae'r gorchymion yn cael eu cyfeirio. 

Mae'r Controllers i gyd yn y ffolder `app/Http/Controllers` a dyna ble mae prif logic y wefan. 

#### Y Trydar

Mae'r trydar yn cael ei anfon gyda Command. Mae'r rhain yn `app/Console/Commands`. 

Mae'r command TweetRandom yn cael ei redeg pob pum munud, ac yn perfformio dwy dasg: 

1. Checio os oes dwy awr wedi pasio ers y tweet diwethaf
2. Taflu deis 180 ochr 

Os yw 40 yn cael ei daflu mae'n galw TweetPost sy'n anfon y trydar. Oddi fewn i TweetPost gelwir TweetImage i anfon y llun i API Twitter a dychwelyd y canlyniad yn ol. 

[@meigwilym](https://twitter.com/meigwilym)

