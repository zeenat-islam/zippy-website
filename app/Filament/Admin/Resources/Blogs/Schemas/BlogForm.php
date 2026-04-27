<?php

namespace App\Filament\Admin\Resources\Blogs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Placeholder;
use Illuminate\Support\Str;
use Illuminate\Support\HtmlString;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            // ── BASIC INFO ──────────────────────────────
            Placeholder::make('_info_basic')
                ->label('')
                ->content(new HtmlString('
                    <p style="font-weight:600;font-size:14px;color:#111827;margin-bottom:4px;">
                        🗂️ Blog Basic Info
                    </p>
                    <p style="font-size:12px;color:#6B7280;">
                        Yeh info blog card aur hero dono mein use hogi
                    </p>
                ')),

            TextInput::make('title')
                ->label('Blog Title')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state)))
                ->placeholder('e.g. Trends of Mobile Design'),

            TextInput::make('slug')
                ->label('URL Slug (auto-generate hoga)')
                ->required()
                ->unique(ignoreRecord: true)
                ->helperText('Example: /blogs/trends-of-mobile-design'),

            TextInput::make('date')
                ->label('Publish Date')
                ->required()
                ->placeholder('e.g. March 12, 2024'),

            TextInput::make('read_time')
                ->label('Read Time')
                ->required()
                ->placeholder('e.g. 4 min read'),

            FileUpload::make('image')
                ->label('Card + Hero Background Image')
                ->helperText('Yeh image blog card aur hero background dono mein use hogi')
                ->disk('public')
                ->directory('')
                ->image()
                ->required(),

            // ── HERO SECTION ────────────────────────────
            Placeholder::make('_info_hero')
                ->label('')
                ->content(new HtmlString('
                    <p style="font-weight:600;font-size:14px;color:#111827;margin-bottom:4px;margin-top:16px;">
                        🦸 Hero Section
                    </p>
                    <p style="font-size:12px;color:#6B7280;">
                        Blog detail page ka top banner — jab koi blog open kare
                    </p>
                ')),

            TextInput::make('badge_title')
                ->label('Badge Button Text')
                ->helperText('Chota button — e.g. DESIGN, AI, TECHNOLOGY')
                ->placeholder('e.g. MOBILE DESIGN'),

            TextInput::make('main_heading')
                ->label('Hero Big Heading')
                ->helperText('Hero ka bada title')
                ->placeholder('e.g. What\'s Next for Mobile Design?'),

            RichEditor::make('description')
                ->label('Hero Description')
                ->helperText('Hero ke neeche chota paragraph'),

            // ── CONTENT BLOCKS ───────────────────────────
            Placeholder::make('_info_content')
                ->label('')
                ->content(new HtmlString('
                    <p style="font-weight:600;font-size:14px;color:#111827;margin-bottom:8px;margin-top:16px;">
                        📝 Blog Content Blocks
                    </p>
                    <div style="background:#EFF6FF;border:1px solid #BFDBFE;border-radius:8px;padding:12px 16px;font-size:12px;color:#1E40AF;">
                        <strong>Block Types:</strong><br><br>
                        ✏️ <strong>Simple Paragraph</strong> — Normal text<br>
                        🖼️ <strong>Simple Image</strong> — Sirf image<br>
                        📄 <strong>Simple Content</strong> — Sub-heading + paragraphs<br>
                        📝➡️🖼️ <strong>Text Left / Image Right</strong><br>
                        🖼️➡️📝 <strong>Image Left / Text Right</strong><br>
                        📄 <strong>Full Width</strong> — Text + image below<br><br>
                        💡 Blocks drag karke reorder kar sakte ho!
                    </div>
                ')),

           Builder::make('content_blocks')
                ->label('')
                ->blocks([

                    // BLOCK 1 — Simple Paragraph
                    Builder\Block::make('paragraph')
                        ->label('✏️ Simple Paragraph — Normal Text')
                        ->schema([
                            Placeholder::make('_help')
                                ->label('')
                                ->content(new HtmlString(
                                    '<p style="color:#6B7280;font-size:12px;">
                                        Ek normal paragraph — koi image nahi
                                    </p>'
                                )),
                            RichEditor::make('content')
                                ->label('Paragraph Text')
                                ->required(),
                        ]),

        

                    // BLOCK 3 — Simple Content
                    Builder\Block::make('simple-content')
                        ->label('📄 Simple Content — Sub-heading + Paragraphs')
                        ->schema([
                            Placeholder::make('_help')
                                ->label('')
                                ->content(new HtmlString(
                                    '<p style="color:#6B7280;font-size:12px;">
                                        Sub-heading + multiple paragraphs — koi image nahi
                                    </p>'
                                )),
                            TextInput::make('title')
                                ->label('Sub-heading')
                                ->placeholder('e.g. Why Minimalism Matters'),
                            RichEditor::make('hero-content')
                                ->label('Opening Paragraph'),
                            RichEditor::make('section1-content')
                                ->label('Second Paragraph'),
                            RichEditor::make('content_1')
                                ->label('Third Paragraph'),
                            RichEditor::make('content_2')
                                ->label('Fourth Paragraph (Optional)'),
                        ]),

                    // BLOCK 4 — Image & Text Mix
                    Builder\Block::make('image-text-block')
                        ->label('🔀 Image & Text — Side by Side Layout')
                        ->schema([
                            Placeholder::make('_help')
                                ->label('')
                                ->content(new HtmlString('
                                    <div style="color:#6B7280;font-size:12px;">
                                        Layout choose karo:<br>
                                        <strong>Text Left / Image Right</strong> — Text left, image right<br>
                                        <strong>Image Left / Text Right</strong> — Image left, text right<br>
                                        <strong>Full Width</strong> — Poora text phir neeche image
                                    </div>
                                ')),
                            Select::make('type')
                                ->label('Layout Style')
                                ->options([
                                    'text-right'      => '📝➡️🖼️  Text Left + Image Right',
                                    'image-left'      => '🖼️➡️📝  Image Left + Text Right',
                                    'full-width-text' => '📄  Full Width (Text + Image Below)',
                                ])
                                ->default('text-right')
                                ->required(),
                            TextInput::make('title')
                                ->label('Section Heading')
                                ->required()
                                ->placeholder('e.g. AI-Powered Interfaces'),
                            RichEditor::make('content')
                                ->label('Section Text')
                                ->required(),
                            FileUpload::make('image')
                                ->label('Section Image')
                                ->disk('public')
                                ->directory('')
                                ->image()
                                ->required(),
                        ]),

                ])
                ->collapsible()
                ->reorderable()
                ->addActionLabel('+ New Content Block Add Karo'),


                // Content blocks ke baad yeh add karo
                    Placeholder::make('_info_cta')
                        ->label('')
                        ->content(new HtmlString('
                            <p style="font-weight:600;font-size:14px;color:#111827;margin-top:16px;">
                                🔵 CTA Banner — Blue Section
                            </p>
                            <p style="font-size:12px;color:#6B7280;">
                                Page ke end mein blue banner — heading, paragraph aur image
                            </p>
                        ')),

                    TextInput::make('cta_heading')
                        ->label('CTA Heading')
                        ->placeholder('e.g. Launch Your App Today'),

                    RichEditor::make('cta_description')
                        ->label('CTA Description'),

                    FileUpload::make('cta_image')
                        ->label('CTA Image (Right Side)')
                        ->disk('public')
                        ->directory('')
                        ->image()
                        ->nullable(),

        ]);

        
    }

    
}