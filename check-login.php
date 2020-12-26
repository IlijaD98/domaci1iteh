<?php

    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $ok = true;
    $messages = array();

    if ( !isset($username) || empty($username) ) {
        $ok = false;
        $messages[] = 'Korisnicko ime ne sme da bude prazno!';
    }

    if ( !isset($password) || empty($password) ) {
        $ok = false;
        $messages[] = 'Sifra ne sme da bude prazna!';
    }

    if ($ok) {
        if ($username === 'admin' && $password === 'admin') {
            $ok = true;
            $messages[] = 'Uspesno ste se ulogovali!';
        } else {
            $ok = false;
            $messages[] = 'Korisnik ne postoji u bazi!';
        }
    }

    echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages
        )
    );

?>