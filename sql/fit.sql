CREATE TABLE goon
(
    id SERIAL,
    email VARCHAR(256) NOT NULL,
    username VARCHAR(256) NOT NULL,
    password VARCHAR(256) NOT NULL,
    last_login_time TIMESTAMP,
    create_time TIMESTAMP,
    update_time TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE(username),
    UNIQUE(email)
);

CREATE TABLE routine
(
    id SERIAL,
    name VARCHAR(50) NOT NULL,
    type VARCHAR(30),
    creator_user_id INTEGER NOT NULL,
    create_time TIMESTAMP,
    update_time TIMESTAMP,
    description TEXT,
    PRIMARY KEY (id),
    FOREIGN KEY (creator_user_id) REFERENCES goon(id)
);

CREATE TABLE goon_schedule
(
    goon_id INTEGER NOT NULL,
    routine_id INTEGER NOT NULL,
    PRIMARY KEY (goon_id, routine_id),
    FOREIGN KEY (goon_id) REFERENCES goon(id),
    FOREIGN KEY (routine_id) REFERENCES routine(id)
);


CREATE TABLE exercise
(
    id SERIAL,
    name VARCHAR(256) NOT NULL,
    description TEXT,
    preparation TEXT NOT NULL,
    execution TEXT NOT NULL,
    note TEXT,
    video_link VARCHAR(100),
    pic_link VARCHAR(100),
    PRIMARY KEY (id)
);

CREATE TYPE theday AS ENUM('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

CREATE TABLE day
(
    id SERIAL,
    routine_id INTEGER NOT NULL,
    day theday NOT NULL,
    sort integer NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (routine_id) REFERENCES routine(id)
);

CREATE TABLE exercise_for_today 
(
    day_id INTEGER NOT NULL,
    exercise_id INTEGER NOT NULL,
    PRIMARY KEY (day_id, exercise_id),
    FOREIGN KEY (day_id) REFERENCES day(id),
    FOREIGN KEY (exercise_id) REFERENCES exercise(id)
);

