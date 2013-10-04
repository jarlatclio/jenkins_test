<?php
/**
 * Class for parsing directories
 *
 * @author jarlatclio
 */

/**
 * 
 */
class JGDirectory {

        private $currentPath = "";
        private $dir;
        
        public function setPath($path) {
                $this->currentPath = $path;
        }

        public function listFiles() {
                $this->dir = opendir($this->currentPath);
        }
}

?>
