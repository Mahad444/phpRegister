using of select clause

-- SELECT ALL (*)

 SELECT * FROM `userblog` 

-- select specific columns 

 SELECT Password,user_id FROM userblog ;

-- select using logical operators (= ,!=, >,<)

 SELECT * FROM userblog WHERE user_id = 3;
 SELECT * FROM userblog WHERE user_id != 3;
 SELECT * FROM userblog WHERE user_id < 2;
 SELECT * FROM userblog WHERE user_id > 2;

-- select using logical [AND. OR]
 SELECT * FROM userblog WHERE user_id =3 AND name = "shamsudin";
SELECT * FROM userblog WHERE user_id =3 OR user_id = 1