<?php
	namespace App\Models;

	class Meal {
		public static function all() {
			return [
            [
                'id' => 1,
                'category' => 'kategorija 1',
                'title' => 'jelo 1',
                'tags' => 'tag 1, tag 2, tag 3',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'ingredients' => 'sastojak 1, sastojak 2, sastojak 3',
            ],
            [
                'id' => 2,
                'category' => 'kategorija 1',
                'title' => 'jelo 2',
                'tags' => 'tag 1, tag 2, tag 3',
                'description' => ' Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'ingredients' => 'sastojak 1, sastojak 2, sastojak 3',
            ],
            [
                'id' => 3,
                'category' => 'kategorija 1',
                'title' => 'jelo 3',
                'tags' => 'tag 1, tag 2, tag 3',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'ingredients' => 'sastojak 1, sastojak 2, sastojak 3',
            ],
        ];
		}
	}
?>