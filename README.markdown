README
===============

The ClassParser gets information about the classes (and their methods) defined in a file.
Basic usage (taken from sample.php):

    $cp = new ClassParser();
    $cp->parse('sample.classes.php');
    var_dump($cp->getClasses());

The following info is parsed (using the example from sample.php):

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
        ["line"]=>
        int(2) 11
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
            ["line"]=>
            int(2) 12
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
        ["line"]=>
        int(2) 21
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
            ["line"]=>
            int(2) 22
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
            ["line"]=>
            int(2) 26
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
            ["line"]=>
            int(2) 37
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
            ["line"]=>
            int(2) 41
            ["doc"]=>
            NULL
          }
          ["randomStaticMethod"]=>
          array(2) {
            ["modifiers"]=>
            array(1) {
              [0]=>
              string(6) "public"
              [1]=>
              string(6) "static"
            }
            ["line"]=>
            int(2) 52
            ["doc"]=>
            string(114) "/**
       * randomStaticMethod
       *
       * @param string $checkdata 
       * @return boolean
       * @author Dean Huczok
       */"
          }
        }
        ["file"]=>
        string(59) "/Users/deanhucz/Desktop/php-class-parser/sample.classes.php"
      }
    }

Was parsed from the following:

    <?php

    interface iOther {
      public function q($name);
    }

    interface iSome {
      public function r($gio);
    }

    abstract class Our {
      public abstract function cd();
    }

    /**
     * undocumented class
     *
     * @package default
     * @author Hugo Wetterberg
     */
    class Abc extends Our implements iSome, iOther {
      private function ab() {

      }

      public function cd() {

      }

      /**
       * undocumented function
       *
       * @param string $name
       * @return void
       * @author Hugo Wetterberg
       */
      public function q($name) {
        return $name;
      }

      public function r($gio) {
        return $gio;
      }

      /**
       * randomStaticMethod
       *
       * @param string $checkdata
       * @return boolean
       * @author Dean Huczok
       */
      public static function randomStaticMethod($checkdata)
      {
          return true;
      }
    }

    public function asasd() {

    }
