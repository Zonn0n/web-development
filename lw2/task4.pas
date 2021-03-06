PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES Dos;

FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  QueryString, Temp: STRING;
BEGIN
  QueryString := GetEnv('QUERY_STRING');
  Temp := Copy(QueryString, Pos(Key, QueryString), 255);
  IF Pos('&', Temp) <> 0
  THEN
    GetQueryStringParameter := Copy(Temp, Pos('=', Temp) + 1, Pos('&', Temp) - Pos('=', Temp) - 1)
  ELSE
    GetQueryStringParameter := Copy(Temp, Pos('=', Temp) + 1, 255)
END;

BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END.
