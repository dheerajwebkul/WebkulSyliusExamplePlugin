@managing_configuration
Feature: Adding a new configuration
    In order to show maintenance configuration in the store
    As an Administrator
    I want to add a new configuration to the system

    Background:
        Given I am logged in as an administrator
        And the store operates on a single channel in "United States"

    @ui
    Scenario: Adding a new configuration
        Given I want to add a new configuration
        When I fill the title with "title1"
        And I fill the shortDescription with "shortDescription1"
        And I fill the description with "<h1>50% off on all products<h1>"
        And I add it
        Then I should be notified that it has been successfully created
        And the title "title1" should appear in the admin

    @ui
    Scenario: Trying to add a new configuration with empty fields
        Given I want to add a new configuration
        When I fill the title with "title1"
        And I add it
        Then I should be notified that the form contains invalid fields

