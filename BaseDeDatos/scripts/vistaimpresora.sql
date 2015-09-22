CREATE VIEW `impresoraVW` AS
    SELECT 
        *
    FROM
        Dispositivo
            INNER JOIN
        impresora ON idDispositivo = Dispositivo_idDispositivo
            INNER JOIN
        posicion ON idPosicion = Posicion_idPosicion
            INNER JOIN
        area ON idarea = area_idarea
            INNER JOIN
        modelotonner ON modelotonner_idmodelotonner = idmodelotonner
