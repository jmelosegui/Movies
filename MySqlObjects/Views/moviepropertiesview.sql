CREATE VIEW moviepropertiesview

AS

  SELECT
    m.idMovie,
    m.idFile,
    m.c00                                                AS name,
    m.c07                                                AS year,
    m.c08                                                AS image,
    m.c01                                                AS sinopsis,
    m.idSet,
    v.strVideoCodec                                      AS videocodec,
    v.fVideoAspect                                       AS aspctratio,
    CASE
    WHEN v.iVideoWidth >= 1080 THEN 1080
    WHEN v.iVideoWidth >= 720 AND v.iVideoWidth < 1080 THEN 720
    WHEN v.iVideoWidth >= 576 AND v.iVideoWidth < 720 THEN 576
    WHEN v.iVideoWidth >= 540 AND v.iVideoWidth < 576 THEN 540
    ELSE 480
    END                                                  AS resolution,
    group_concat(DISTINCT a.strAudioCodec SEPARATOR ',') AS audio
  FROM
      movie m
      LEFT JOIN streamdetails v
        ON m.idFile = v.idFile
      LEFT JOIN streamdetails a
        ON m.idFile = a.idFile
  WHERE
    v.iStreamType = 0
    AND a.iStreamType = 1
  GROUP BY
    m.idMovie
    , m.idFile
    , m.c00
    , m.c07
    , m.c01
    , m.idSet;