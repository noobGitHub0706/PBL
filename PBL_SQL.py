import MySQLdb

con = MySQLdb.connect(
    host='localhost',
    user='root',
    password='pbl',
    db='user')
cur = con.cursor()
cur.execute("""
            CREATE TABLE user.list
    (id MEDIUMINT NOT NULL AUTO_INCREMENT,
    username VARCHAR(30)
    email VARCHAR(100),
    password VARCHAR(30),
    PRIMARY KEY (id))
            """)

con.commit()

con.close()
