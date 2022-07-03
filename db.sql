create table comment
(
    id         int auto_increment
        primary key,
    content    text                                not null,
    user_id    int                                 not null,
    post_id    int                                 not null,
    created_at timestamp default CURRENT_TIMESTAMP null,
    updated_at timestamp default CURRENT_TIMESTAMP null
);

create table post
(
    id         int auto_increment
        primary key,
    title      varchar(256)                        not null,
    content    text                                not null,
    user_id    int                                 not null,
    created_at timestamp default CURRENT_TIMESTAMP null,
    updated_at timestamp default CURRENT_TIMESTAMP null
);

create table user
(
    id         bigint auto_increment
        primary key,
    email      varchar(255)                        not null,
    password   varchar(256)                        not null,
    created_at timestamp default CURRENT_TIMESTAMP null,
    constraint user_username_uindex
        unique (email)
);
