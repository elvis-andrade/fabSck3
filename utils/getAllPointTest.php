

SELECT DISTINCT deviceId, lat, lng, timestamp FROM `data` WHERE  `timestamp` BETWEEN  GROUP BY lat, lng ORDER BY deviceId, timestamp