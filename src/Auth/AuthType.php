<?php
namespace Auth;

enum AuthType: string
{
    case AUTO = 'auto';
    case MANUALLY = 'manually';
}
