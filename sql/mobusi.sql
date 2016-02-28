
BEGIN;

CREATE DATABASE mobusi;

-----------------------------------------------------------------------
-- public.venue
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "public"."venue" CASCADE;

CREATE TABLE "public"."venue"
(
    "id" serial NOT NULL,
    "name" VARCHAR(255) NOT NULL,
    PRIMARY KEY ("id")
);

COMMENT ON COLUMN "public"."venue"."id" IS 'id_localizacion';

COMMENT ON COLUMN "public"."venue"."name" IS 'localización';

-----------------------------------------------------------------------
-- public.event
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "public"."event" CASCADE;

CREATE TABLE "public"."event"
(
    "id" serial NOT NULL,
    "venue_id" INTEGER NOT NULL,
    "picture" VARCHAR NOT NULL,
    "description" TEXT NOT NULL,
    PRIMARY KEY ("id")
);

COMMENT ON COLUMN "public"."event"."id" IS 'id_evento';

COMMENT ON COLUMN "public"."event"."venue_id" IS 'id_localizacion';

COMMENT ON COLUMN "public"."event"."picture" IS 'img';

COMMENT ON COLUMN "public"."event"."description" IS 'txt';

ALTER TABLE "public"."event" ADD CONSTRAINT "event_fk_6c91aa"
    FOREIGN KEY ("venue_id")
    REFERENCES "public"."venue" ("id");

COMMIT;
