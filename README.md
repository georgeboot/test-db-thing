# To reproduce

1. Deploy to vapor and attach a MySQL database (Postgres not tested)
2. Run the `testdb` command from the Vapor UI (btw, it always times out which is strange)
3. Monitor your db with `SHOW PROCESSLIST` and see sleeping connections pile up.
4. Monitor your Queue log via the Vapor UI to see the individual attempts run.
