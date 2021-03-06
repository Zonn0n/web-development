PROGRAM PrintHello(INPUT, OUTPUT);
USES Dos;
VAR
  QueryString, Name: STRING;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QueryString := GetEnv('QUERY_STRING');
  IF Pos('name=', QueryString) = 1
  THEN
    BEGIN
      Name := Copy(QueryString, 6, 255);
      WRITELN('Hello, dear ', Name,  '!')
    END
  ELSE
    WRITELN('Hello Anonymous!')
END.