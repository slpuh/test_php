# test_php

Есть таблица 
traffic (period date not null, code varchar(10) not null, raw_count int not null)
Неоходимо написать скрипт-счетчик, к-рый подсчитывает сколько раз в день он был вызван с определенным параметром code.
period		– это текущий день, 
code		– это параметр, приходящий методом GET или POST
raw_count	– сам счетчик
Пример вызова: http://domain.com/traffic.php?code=lala-fafa+123
Для работы с БД можно использовать ф-цию sql_exec – с параметром типа строка SQL, например
$rows = sql_exec(”select * from traffic where period=now()”);
$row_count = sql_exec(”delete from traffic where period<now() and code=’bla’”);
Можете придумать некую свою ф-цию, само название к-рой говорит само за себя.
Пример результата в таблице

|   Period   |         code            | raw_count |
|:----------:|-------------------------|-----------|
| 2019-01-01 | lala-fafa 123           | 256215    |
| 2019-01-01 | lala-fafa 124           | 6454542   |
| 2019-01-02 | Zxcv-12345-gfksh-ghjdkd | 256224    |
| 2019-01-03 | qwerty ’;               | 2         |
| 2019-01-04 | qwerty                  | 552741    |
| 2019-01-04 | lala-fafa 123           | 447455    |
