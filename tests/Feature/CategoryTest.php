<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function test_categories_route_contains_livewire_component()
    {
        $this->get(route("categories"))
            ->assertSuccessful()
            ->assertSeeLivewire("categories-livewire");
    }
    public function test_a_category_can_be_added()
    {
        ;
    }

    public function test_a_category_can_be_edited()
    {
        ;
    }

    public function test_a_category_cannot_be_added_with_same_name()
    {
        ;
    }

    public function test_a_category_cannot_be_edited_with_same_name()
    {
        ;
    }

    public function test_a_category_cannot_be_added_with_name_longer_than_40_characters()
    {
        ;
    }

    public function test_a_category_name_cannot_be_edited_to_more_than_40_characters()
    {
        ;
    }
    public function test_users_are_warned_if_they_try_to_delete_a_category_that_has_products()
    {
        ;
    }
    public function test_all_products_that_belong_to_category_are_deleted_if_the_category_is_force_deleted()
    {
        ;
    }
}
