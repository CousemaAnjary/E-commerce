<?php

//  $_label : Le texte qui apparaîtra sur le bouton (par défaut, il est défini sur 'Default')
//  $_action : Une action JavaScript optionnelle qui sera exécutée lorsque le bouton est cliqué
//  $_type : Un type de bouton optionnel (par exemple, "submit" ou "button")
//  $_form : Une chaîne optionnelle pour spécifier des classes supplémentaires pour le bouton.
//  $_size : Une chaîne optionnelle pour spécifier la taille du bouton (par défaut, 'md', probablement pour 'medium').

//  $handleClickAction = (condition) ? 'valeur_si_vraie' : 'valeur_si_fausse';

/**---------------------------------- BOUTON----------------------------------- **/


function primary_btn($_label = 'Default', $_type = '', $_size = 'md', $_action = '', $_form = '')
{
    // Vérifie si $_action n'est pas vide après avoir supprimé les espaces
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '" ' : '';

    // Construit le code HTML du bouton en utilisant les paramètres et la condition précédente
    $btn = '<button type =" ' . $_type . '" class="btn btn-primary btn-' . $_size . ' ' . $_form . '" ' . $handleClickAction . '>' . $_label . '</button>';

    // Renvoie le code HTML du bouton
    return $btn;
}

function success_btn($_label = 'Default', $_type = '', $_size = 'md', $_action = '', $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '" ' : '';

    $btn = '<button type =" ' . $_type . '" class="btn btn-success btn-' . $_size . ' ' . $_form . '" ' . $handleClickAction . '>' . $_label . '</button>';
    return $btn;
}

function info_btn($_label = 'Default', $_type = '', $_size = 'md', $_action = '', $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '" ' : '';

    $btn = '<button type =" ' . $_type . '" class="btn btn-info btn-' . $_size . ' ' . $_form . '" ' . $handleClickAction . '>' . $_label . '</button>';
    return $btn;
}

function warning_btn($_label = 'Default', $_type = '', $_size = 'md', $_action = '', $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '" ' : '';

    $btn = '<button type =" ' . $_type . '" class="btn btn-warning btn-' . $_size . ' ' . $_form . '" ' . $handleClickAction . '>' . $_label . '</button>';
    return $btn;
}

function danger_btn($_label = 'Default', $_type = '', $_size = 'md', $_action = '', $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '" ' : '';

    $btn = '<button type ="' . $_type . '" class="btn btn-danger btn-' . $_size . ' ' . $_form . '" ' . $handleClickAction . '>' . $_label . '</button>';
    return $btn;
}


/**----------------------------------  OUTLINE BOUTON----------------------------------- **/


function primary_outline_btn($_label = 'Default', $_type = "", $_size = 'md', $_action = '',   $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '"  ' : '';

    $btn = '<button type = "' . $_type . '" class = " btn btn-outline-primary btn-' . $_size . ' ' . $_form . ' " ' . $handleClickAction . '> ' . $_label . ' </button> ';
    return $btn;
}


function success_outline_btn($_label = 'Default', $_type = "", $_size = 'md', $_action = '',   $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '"  ' : '';

    $btn = '<button type = "' . $_type . '" class = " btn btn-outline-success btn-' . $_size . ' ' . $_form . ' " ' . $handleClickAction . '> ' . $_label . ' </button> ';
    return $btn;
}


function info_outline_btn($_label = 'Default', $_type = "", $_size = 'md', $_action = '',   $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '"  ' : '';

    $btn = '<button type = "' . $_type . '" class = " btn btn-outline-info btn-' . $_size . ' ' . $_form . ' " ' . $handleClickAction . '> ' . $_label . ' </button> ';
    return $btn;
}


function warning_outline_btn($_label = 'Default', $_type = "", $_size = 'md', $_action = '',   $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '"  ' : '';

    $btn = '<button type = "' . $_type . '" class = " btn btn-outline-warning btn-' . $_size . ' ' . $_form . ' " ' . $handleClickAction . '> ' . $_label . ' </button> ';
    return $btn;
}


function danger_outline_btn($_label = 'Default', $_type = "", $_size = 'md', $_action = '',   $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '"  ' : '';

    $btn = '<button type = "' . $_type . '" class = " btn btn-outline-danger btn-' . $_size . ' ' . $_form . ' " ' . $handleClickAction . '> ' . $_label . ' </button> ';
    return $btn;
}



















/**---------------------------------- LINK----------------------------------- **/

function primary_link($_label = 'Default', $_href = '', $_type = "", $_size = 'md', $_action = '',   $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '"  ' : '';

    $btn = '<a href = "' . $_href . '" type = "' . $_type . '" class="btn btn-primary btn-' . $_size . ' ' . $_form . ' "  ' .  $handleClickAction . '>' . $_label . '</a>';
    return $btn;
}

function success_link($_label = 'Default', $_href = '', $_type = "", $_size = 'md', $_action = '',   $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '"  ' : '';

    $btn = '<a href = "' . $_href . '" type = "' . $_type . '" class="btn btn-success btn-' . $_size . ' ' . $_form . ' "  ' .  $handleClickAction . '>' . $_label . '</a>';
    return $btn;
}

function info_link($_label = 'Default', $_href = '', $_type = "", $_size = 'md', $_action = '',   $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '"  ' : '';

    $btn = '<a href = "' . $_href . '" type = "' . $_type . '" class="btn btn-info btn-' . $_size . ' ' . $_form . ' "  ' .  $handleClickAction . '>' . $_label . '</a>';
    return $btn;
}

function warning_link($_label = 'Default', $_href = '', $_type = "", $_size = 'md', $_action = '',   $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '"  ' : '';

    $btn = '<a href = "' . $_href . '" type = "' . $_type . '" class="btn btn-warning btn-' . $_size . ' ' . $_form . ' "  ' .  $handleClickAction . '>' . $_label . '</a>';
    return $btn;
}

function danger_link($_label = 'Default', $_href = '', $_type = "", $_size = 'md', $_action = '',   $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '"  ' : '';

    $btn = '<a href = "' . $_href . '" type = "' . $_type . '" class="btn btn-danger btn-' . $_size . ' ' . $_form . ' "  ' .  $handleClickAction . '>' . $_label . '</a>';
    return $btn;
}


/**----------------------------------  CONSULTER + ICON LINK  ----------------------------------- **/

function excel_icon_link($_label = 'Default', $_href = '#', $_type = '', $_size = 'md', $_action = '', $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '"  ' : '';

    $btn = '<a href="' . $_href . '" class = " btn btn-outline-success btn-' . $_type . ' btn-' . $_size . ' ' . $_form . '"  ' .  $handleClickAction . '>
    <i class="fa-solid fa-file-excel"></i> ' . $_label . '</a>';
    return $btn;
}

function pdf_icon_link($_label = 'Default', $_href = '#', $_type = '', $_size = 'md', $_action = '', $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '"  ' : '';

    $btn = '<a href="' . $_href . '" class = " btn btn-outline-danger btn-' . $_type . ' btn-' . $_size . ' ' . $_form . '"  ' .  $handleClickAction . '>
    <i class="fa-solid fa-file-pdf"></i> ' . $_label . '</a>';
    return $btn;
}

function word_icon_link($_label = 'Default', $_href = '#', $_type = '', $_size = 'md', $_action = '', $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '"  ' : '';

    $btn = '<a href="' . $_href . '" class = " btn btn-outline-info btn-' . $_type . ' btn-' . $_size . ' ' . $_form . '"  ' .  $handleClickAction . '>
    <i class="fa-solid fa-file-word"></i> ' . $_label . '</a>';
    return $btn;
}

function print_icon_link($_label = 'Default', $_href = '#', $_type = '', $_size = 'md', $_action = '', $_form = '')
{
    $handleClickAction = (trim($_action) != '') ? ' onclick = "' . $_action . '"  ' : '';

    $btn = '<a href="' . $_href . '" class = " btn btn-outline-warning btn-' . $_type . ' btn-' . $_size . ' ' . $_form . '"  ' .  $handleClickAction . '>
    <i class="fa-solid fa-print"></i> ' . $_label . '</a>';
    return $btn;
}
