<?php

// main
Breadcrumbs::for('main', function ($trail) {
    $trail->push('main', url('main'));
});


// main > contents
Breadcrumbs::for('slat', function ($trail) {
    $trail->parent('main');
    $trail->push('>contents', url('slat'));
});

// main > history
Breadcrumbs::for('history', function ($trail) {
    $trail->parent('main');
    $trail->push('>Your history', url('history'));
});

// ホーム > 本の一覧 >  [Title]  > 編集
Breadcrumbs::for('editBook', function ($trail, $book) {
    $trail->parent('showBook', $book);
    $trail->push('編集', url('books/' . $book->id .'/edit'));
});