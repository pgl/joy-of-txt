# The Joy of TXT

Various files related to some investigation into TXT records. Article first published on RIPE Labs:

 * https://labs.ripe.net/author/pgl/the-joy-of-txt/

## Interesting files

Probably the most interesting files here are:

 * [db.txt-records.sqlite3](db.txt-records.sqlite3) - SQLite3 database with 765,651 TXT records from all checked domains - 1 table: `CREATE table records (domain TEXT, record TEXT)`
 * [top-1m.csv](top-1m.csv) - the top 1 million domains from Cisco downloaded March 13th 2023
 * [host.out.bz2](host.out.bz2) - compressed file of the output of checking TXT records for the top 1 million list

Other files were generated to make it easier to do things like count record lengths, count TXT records for each domain, check for swear words, etc.
