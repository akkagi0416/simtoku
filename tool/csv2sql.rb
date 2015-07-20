#!/usr/bin/env ruby

require 'sqlite3'
require 'csv'

fname = ARGV[0]

tbname = 'mvno_list'

i = 0
column = ""
CSV.foreach(fname, {:quote_char => '"'}) do |row|
    # 1行目のカラム名を抽出
    if i == 0
        column = row.join(',')
        sql = "CREATE TABLE #{tbname}( #{row.join(" text,\n")} text\n);\n"
        sql.sub!(/text/, 'integer')     # 1つ目カラムはidなのでinteger型に変換
        print sql
        i += 1
        next
    end
    val = ""
    row.each_with_index do |c, i|
        if c == nil
            c = ''
        end
        if i == 0                       # 1つ目カラム id -> integer
            val += c + ','
        else
            val += '"' + c + '",'
        end
    end
    val.sub!(/,$/,'')
    print "INSERT INTO #{tbname}( #{column} ) VALUES( #{val} );\n"
    i += 1
end
