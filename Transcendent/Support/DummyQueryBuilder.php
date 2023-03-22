<?php 

namespace Transcendent\Support;

/**
 * Documentation
 * 
 * @method runSuccess()
 * @method static get()
 * @method filterAge(int $numberOfAge)
 */

class DummyQueryBuilder {
    /**
     * Dummy Data Const Properties
     * 
     * @var array<mixed>
     */
    private static $data = [
        [
            'id'    => 1,
            'name'  => 'Damenjo',
            'age'   => 22
        ],
        [
            'id'    => 2,
            'name'  => 'Tari',
            'age'   => 23
        ],
        [
            'id'    => 3,
            'name'  => 'Resident Evil',
            'age'   => 60
        ]
    ];

    /**
     * Return Dummy Data As Well
     * 
     * @return array<mixed>
     */
    public static function get(): array
    {
        return self::$data;
    }

    /**
     * Filter Dummy Data By Age
     * 
     * @param int $numberOfPage
     * @return static
     */
    public static function filterAge(int $numberOfAge = 0): static
    {
        self::$data = array_filter(self::$data, function($data) use ($numberOfAge) {
            return (int)$data['age'] > $numberOfAge;
        });
        return new static;
    }

    /**
     * Test DummyQueryBuilder Is Successfully Called
     * 
     * @return string
     */
    public function runSuccess(): string
    {
        return 'Query builder successfully called';
    }
}