
<?php
session_start();
ini_set('display_errors', 0);
include 'required_file.php';

/**
 * 
 * Hey ,
 * Can u inject me ? ah ah aagh agh :v ,
 * But but, u must know about php, before inject me :)
 *
 *
 * Rules ? 
 * - Dont use concat , CURRENT_USER , SESSION_USER ,user ,database, @@version
 * - Dont use information_schema.tables , information_schema.columns
 * 
 * - Print Image , Leet Name , Database , User, version , Time now, and DIOS
 *
 *
 * clue ?
 * - need a key ? , u can brute me :v
 * - Hmm , kadang muncul kadang tidak . Beginilah hidup :(
 * - 100 adalah nomor keberuntungan ku :)
 * - I am very tired :(
 *
 * 
 * Solved ? pm me
 *
 * List solver ?
 * http://localhost/solver.php
 * 
 */

$id = $_GET['id'];

if(isset($_GET['key'])){
	$key = $_GET['key'];
	if($key[0] > 6 and $key[3] + $key[2] > 12){
		if($key[2]+$key[5] < $key[0]){
			if($key[2] >= $key[1]+$key[4]){
				if($key[0] > $key[4]+$key[1]){
					if($key[3] < $key[0]-$key[4]){
						if($key[0]+$key[4] > $key[2]){
							if($key[1]+$key[4] == $key[5]){
								if(isset($_GET['num'])) {
									if((int)abs(log10(pow(23,13))*rand(1,2)) == (int)$_GET['num']){
										for($i=0; $i<$looping;$i++){
											$id = preg_replace("/(union|and|img|src|img src|or|false|true|select|order|by|database|user|schema|-|'| |ASCII|BIN|BINARY OPERATOR|BIT_LENGTH|CAST|CHAR FUNCTION|CHARACTER_LENGTH|CHAR_LENGTH|CONCAT|CONCAT_WS|CONVERT|ELT|EXPORT_SET|EXTRACTVALUE|FIELD|FIND_IN_SET|where|HEX|INSERT FUNCTION|INSTR|LCASE|LEFT|LENGTH|LIKE|LOAD_FILE|LOCATE|LOWER|LPAD|LTRIM|MAKE_SET|MATCH AGAINST|MID|NOT LIKE|NOT REGEXP|OCT|OCTET_LENGTH|ORD|POSITION|QUOTE|REGEXP|REPEAT FUNCTION|REPLACE FUNCTION|REVERSE|RIGHT|RPAD|RTRIM|SOUNDEX|SOUNDS LIKE|SPACE|STRCMP|SUBSTR|SUBSTRING|SUBSTRING_INDEX|TRIM|UCASE|UNHEX|UPDATEXML|UPPER|ADDDATE|ADDTIME|CONVERT_TZ|CURDATE|CURRENT_DATE|CURRENT_TIME|CURRENT_TIMESTAMP|CURTIME|DATE FUNCTION|DATEDIFF|DATE_ADD|DATE_FORMAT|DATE_SUB|DAY|tables|DAYNAME|DAYOFMONTH|DAYOFWEEK|DAYOFYEAR|EXTRACT|FROM_DAYS|FROM_UNIXTIME|GET_FORMAT|HOUR|LAST_DAY|@|LOCALTIMESTAMP|MAKEDATE|MAKETIME|MICROSECOND|MINUTE|MONTH|MONTHNAME|NOW|PERIOD_ADD|tables|columns|column|table|PERIOD_DIFF|QUARTER|SECOND|SEC_TO_TIME|STR_TO_DATE|SUBDATE|SUBTIME|SYSDATE|TIME FUNCTION|TIMEDIFF|TIMESTAMP FUNCTION|TIMESTAMPADD|TIMESTAMPDIFF|TIME_FORMAT|TIME_TO_SEC|TO_DAYS|TO_SECONDS|UNIX_TIMESTAMP|UTC_DATE|UTC_TIME|UTC_TIMESTAMP|WEEK|WEEKDAY|WEEKOFYEAR|YEAR|YEARWEEK|BENCHMARK|CHARSET|COERCIBILITY|COLLATION|CONNECTION_ID|CURRENT_USER|DATABASE|FOUND_ROWS|LAST_INSERT_ID|ROW_COUNT|SCHEMA|SESSION_USER|USER|VERSION)/i", "", $id);
												}

										if(isset($_GET['id'])){
											$query = "select * from challenge1 where id=$id";
										}else{
											$query = "select * from challenge1";
										}
										$data = $con->prepare($query);
										$data->execute();
										?>
										<link rel="stylesheet" href="style.css">
										<table>
											<thead>
												<th>No</th>
												<th>Judul</th>
												<th>Desc</th>
												<th>Created_at</th>
											</thead>
											<tbody>
											<?php
											$no=1;
											while($row = $data->fetch())
												{?>
													<tr>
														<td><?= $no ?></td>
														<td><?= $row['judul'] ?></td>
														<td><?= $row['decs'] ?></td>
														<td><?= $row['created_at'] ?></td>
													</tr>
													<?php $no+=1;
												}
												?>
											</tbody>
										</table>

									<?php
									}else{
										echo "NONONO";
									}
								}else{
									echo "NONONO !1!1";
								}
							}else{
								echo "Wrong key , guys";
							}
						}else{
							echo "Wrong key , guys";
						}
					}else{
						echo "Wrong key , guys";
					}
				}else{
					echo "Wrong key , guys";
				}
			}else{
				echo "Wrong key , guys";
			}
		}else{
			echo "Wrong key , guys";
		}
	}else{
		echo "Wrong key , guys";
	}
}else{
	echo "where ur key ??,";
}
highlight_file(__FILE__);
?>