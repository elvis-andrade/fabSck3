

SELECT lat, lng,  AVG() as data FROM `data` WHERE `timestamp` BETWEEN  GROUP BY lat, lng