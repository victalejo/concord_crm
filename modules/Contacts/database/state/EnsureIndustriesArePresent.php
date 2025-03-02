<?php
/**
 * Concord CRM - https://www.concordcrm.com
 *
 * @version   1.5.1
 *
 * @link      Releases - https://www.concordcrm.com/releases
 * @link      Terms Of Service - https://www.concordcrm.com/terms
 *
 * @copyright Copyright (c) 2022-2024 KONKORD DIGITAL
 */

namespace Modules\Contacts\Database\State;

use Illuminate\Support\Facades\DB;

class EnsureIndustriesArePresent
{
    protected array $industries = [
        'Accountants',
        'Advertising/Public Relations',
        'Aerospace, Defense Contractors',
        'Agriculture',
        'Air Transport',
        'Airlines',
        'Alcoholic Beverages',
        'Alternative Energy Production & Services',
        'Architectural Services',
        'Attorneys/Law Firms',
        'Auto Dealers',
        'Auto Manufacturers',
        'Automotive',
        'Banking, Mortgage',
        'Banks, Commercial',
        'Banks, Savings & Loans',
        'Bars & Restaurants',
        'Beer, Wine & Liquor',
        'Books, Magazines & Newspapers',
        'Broadcasters, Radio/TV',
        'Builders/General Contractors',
        'Builders/Residential',
        'Building Materials & Equipment',
        'Business Associations',
        'Business Services',
        'Cable & Satellite TV Production & Distribution',
        'Candidate Committees',
        'Car Dealers',
        'Car Dealers, Imports',
        'Car Manufacturers',
        'Casinos / Gambling',
        'Cattle Ranchers/Livestock',
        'Chemical & Related Manufacturing',
        'Chiropractors',
        'Civil Servants/Public Officials',
        'Clergy & Religious Organizations',
        'Clothing Manufacturing',
        'Coal Mining',
        'Colleges, Universities & Schools',
        'Commercial Banks',
        'Commercial TV & Radio Stations',
        'Communications/Electronics',
        'Computer Software',
        'Construction',
        'Construction Services',
        'Credit Unions',
        'Crop Production & Basic Processing',
        'Cruise Lines',
        'Cruise Ships & Lines',
        'Dairy',
        'Defense',
        'Defense Aerospace',
        'Defense Electronics',
        'Defense/Foreign Policy Advocates',
        'Dentists',
        'Doctors & Other Health Professionals',
        'Drug Manufacturers',
        'Education',
        'Electric Utilities',
        'Electronics Manufacturing & Equipment',
        'Electronics, Defense Contractors',
        'Energy & Natural Resources',
        'Entertainment Industry',
        'Environment',
        'Farm Bureaus',
        'Farming',
        'Finance / Credit Companies',
        'Finance, Insurance & Real Estate',
        'Food & Beverage',
        'Food Processing & Sales',
        'Food Products Manufacturing',
        'Food Stores',
        'For-profit Education',
        'For-profit Prisons',
        'Foreign & Defense Policy',
        'Forestry & Forest Products',
        'Foundations, Philanthropists & Non-Profits',
        'Funeral Services',
        'Gambling & Casinos',
        'Gambling, Indian Casinos',
        'Garbage Collection/Waste Management',
        'Gas & Oil',
        'General Contractors',
        'Government Employees',
        'Gun Control',
        'Gun Rights',
        'Health',
        'Health Professionals',
        'Health Services/HMOs',
        'Hedge Funds',
        'HMOs & Health Care Services',
        'Home Builders',
        'Hospitals & Nursing Homes',
        'Hotels, Motels & Tourism',
        'Human Rights',
        'Ideological/Single-Issue',
        'Indian Gaming',
        'Industrial Unions',
        'Insurance',
        'Internet',
        'Labor',
        'Lawyers & Lobbyists',
        'Lawyers / Law Firms',
        'Leadership PACs',
        'Liquor, Wine & Beer',
        'Livestock',
        'Lobbyists',
        'Lodging / Tourism',
        'Logging, Timber & Paper Mills',
        'Manufacturing, Misc',
        'Marine Transport',
        'Meat processing & products',
        'Medical Supplies',
        'Mining',
        'Misc Business',
        'Misc Finance',
        'Misc Manufacturing & Distributing',
        'Misc Unions',
        'Miscellaneous Defense',
        'Miscellaneous Services',
        'Mortgage Bankers & Brokers',
        'Motion Picture Production & Distribution',
        'Music Production',
        'Natural Gas Pipelines',
        'Newspaper, Magazine & Book Publishing',
        'Non-profits, Foundations & Philanthropists',
        'Nurses',
        'Nursing Homes/Hospitals',
        'Nutritional & Dietary Supplements',
        'Oil & Gas',
        'Other',
        'Payday Lenders',
        'Pharmaceutical Manufacturing',
        'Pharmaceuticals / Health Products',
        'Phone Companies',
        'Physicians & Other Health Professionals',
        'Postal Unions',
        'Poultry & Eggs',
        'Power Utilities',
        'Printing & Publishing',
        'Private Equity & Investment Firms',
        'Pro-Israel',
        'Professional Sports, Sports Arenas & Related Equipment & Services',
        'Progressive/Democratic',
        'Public Employees',
        'Public Sector Unions',
        'Publishing & Printing',
        'Radio/TV Stations',
        'Railroads',
        'Real Estate',
        'Record Companies/Singers',
        'Recorded Music & Music Production',
        'Recreation / Live Entertainment',
        'Religious Organizations/Clergy',
        'Residential Construction',
        'Restaurants & Drinking Establishments',
        'Retail Sales',
        'Retired',
        'Savings & Loans',
        'Schools/Education',
        'Sea Transport',
        'Securities & Investment',
        'Special Trade Contractors',
        'Sports, Professional',
        'Steel Production',
        'Stock Brokers/Investment Industry',
        'Student Loan Companies',
        'Sugar Cane & Sugar Beets',
        'Teachers Unions',
        'Teachers/Education',
        'Telecom Services & Equipment',
        'Telephone Utilities',
        'Textiles',
        'Timber, Logging & Paper Mills',
        'Tobacco',
        'Transportation',
        'Transportation Unions',
        'Trash Collection/Waste Management',
        'Trucking',
        'TV / Movies / Music',
        'TV Production',
        'Unions',
        'Universities, Colleges & Schools',
        'Vegetables & Fruits',
        'Venture Capital',
        'Waste Management',
    ];

    public function __invoke(): void
    {
        if ($this->present()) {
            return;
        }

        foreach ($this->industries as $industry) {
            \Modules\Contacts\Models\Industry::create(['name' => $industry]);
        }
    }

    private function present(): bool
    {
        return DB::table('industries')->count() > 0;
    }
}
