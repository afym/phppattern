<?php

  $browser = $_SERVER['HTTP_USER_AGENT'];

  $option = '';

        if (preg_match('/Firefox/i', $browser)) {
            $option =  'firefox';
        } else if (preg_match('/Chrome/i', $browser)) {
            $option = 'chrome';
        }
        
?>

<?php if ($option == 'firefox') : ?>
<button type="button" value="Grabar" 
                    style="
                    background-color: #428bca;
                    border-color: #357ebd;
                    color: #fff;
                    -moz-user-select: none;
                    background-image: none;
                    border: 1px solid transparent;
                    border-radius: 4px;
                    cursor: pointer;
                    display: inline-block;
                    font-size: 14px;
                    font-weight: 400;
                    line-height: 1.42857;
                    margin-bottom: 0;
                    padding: 6px 12px;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;">Save</button>
<?php elseif ($option == 'chrome') : ?>
<button type="button" value="Grabar" 
                 style="
                 background-color: #d9534f;
                 border-color: #d43f3a;
                 color: #fff;
                 -moz-user-select: none;
                 background-image: none;
                 border: 1px solid transparent;
                 border-radius: 4px;
                 cursor: pointer;
                 display: inline-block;
                 font-size: 14px;
                 font-weight: 400;
                 line-height: 1.42857;
                 margin-bottom: 0;
                 padding: 6px 12px;
                 text-align: center;
                 vertical-align: middle;
                 white-space: nowrap;">Save</button>
<?php endif; ?>
