



SELECT * 
FROM ( 
SELECT ev_id, deviceId, lat, lng, pm10, pm02, timestamp FROM `data` WHERE deviceId="smartcitizen3" and pm10<>0 order by timestamp desc limit 1
    ) as mytab
    
    UNION
    
    SELECT * 
FROM ( 
SELECT ev_id, deviceId, lat, lng, pm10, pm02, timestamp FROM `data` WHERE deviceId="smartcitizen2" and pm10<>0   order by timestamp desc limit 1
    ) as mytab2
    
        UNION
    
    SELECT * 
FROM ( 
SELECT ev_id, deviceId, lat, lng, pm10, pm02, timestamp FROM `data` WHERE deviceId="smartcitizen1" and pm10<>0   order by timestamp desc limit 1
    ) as mytab3


