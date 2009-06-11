README
===============

The ClassParser gets information about the classes defined in a file. The following info is parsed (using the example from sample.php):

    array(2) {
      ["Our"]=>
      array(5) {
        ["name"]=>
        string(3) "Our"
        ["modifiers"]=>
        array(1) {
          [0]=>
          string(8) "abstract"
        }
        ["doc"]=>
        NULL
        ["functions"]=>
        array(1) {
          ["cd"]=>
          array(2) {
            ["modifiers"]=>
            array(2) {
              [0]=>
              string(6) "public"
              [1]=>
              string(8) "abstract"
            }
            ["doc"]=>
            NULL
          }
        }
        ["file"]=>
        string(59) "/Users/hugowett/Desktop/php-class-parser/sample.classes.php"
      }
      ["Abc"]=>
      array(7) {
        ["name"]=>
        string(3) "Abc"
        ["modifiers"]=>
        array(0) {
        }
        ["doc"]=>
        string(79) "/**
     * undocumented class
     *
     * @package default
     * @author Hugo Wetterberg
     */"
        ["extends"]=>
        array(1) {
          [0]=>
          string(3) "Our"
        }
        ["implements"]=>
        array(2) {
          [0]=>
          string(5) "iSome"
          [1]=>
          string(6) "iOther"
        }
        ["functions"]=>
        array(4) {
          ["ab"]=>
          array(2) {
            ["modifiers"]=>
            array(1) {
              [0]=>
              string(7) "private"
            }
            ["doc"]=>
            NULL
          }
          ["cd"]=>
          array(2) {
            ["modifiers"]=>
            array(1) {
              [0]=>
              string(6) "public"
            }
            ["doc"]=>
            NULL
          }
          ["q"]=>
          array(2) {
            ["modifiers"]=>
            array(1) {
              [0]=>
              string(6) "public"
            }
            ["doc"]=>
            string(114) "/**
       * undocumented function
       *
       * @param string $name 
       * @return void
       * @author Hugo Wetterberg
       */"
          }
          ["r"]=>
          array(2) {
            ["modifiers"]=>
            array(1) {
              [0]=>
              string(6) "public"
            }
            ["doc"]=>
            NULL
          }
        }
        ["file"]=>
        string(59) "/Users/hugowett/Desktop/php-class-parser/sample.classes.php"
      }
    }