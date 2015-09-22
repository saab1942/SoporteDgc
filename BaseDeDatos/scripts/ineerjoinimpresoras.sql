SELECT 
    dispositivo.idDispositivo,
    dispositivo.orden,
    dispositivo.serie,
    dispositivo.marca,
    dispositivo.modelo,
    dispositivo.descripcion,
    impresora.tipo, 
    impresora.ip, 
    impresora.tonnermodelo,
    impresora.Dispositivo_idDispositivo
    
    from dispositivo inner join impresora
    on dispositivo.idDispositivo=impresora.Dispositivo_idDispositivo
    