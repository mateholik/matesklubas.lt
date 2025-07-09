<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.7.0
 */

use Automattic\WooCommerce\Enums\ProductType;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<?php
// Your custom condition - exclude product ID 1067
if($product->get_id() != 1067) { ?>

    <div class="product_meta customMeta">

        <?php do_action( 'woocommerce_product_meta_start' ); ?>

        <?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( ProductType::VARIABLE ) ) ) : ?>

            <span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

        <?php endif; ?>

        <?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

        <?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

        <?php
        // Your custom product meta fields
        productCustomTags($product->get_id(), 'salis', 'Kilmės šalis');
        productCustomTags($product->get_id(), 'sudetis', 'Sudėtis');
        productCustomTags($product->get_id(), 'skonio_intensyvumas', 'Skonio intensyvumas');
        productCustomTags($product->get_id(), 'kiekis', 'Kiekis');
        productCustomTags($product->get_id(), 'paruosimo_budas', 'Rekomenduojamas paruošimo būdas');
        productCustomTags($product->get_id(), 'turis', 'Tūris');
        productCustomTags($product->get_id(), 'aukstis', 'Aukštis');
        productCustomTags($product->get_id(), 'skersmuo', 'Skersmuo');
        productCustomTags($product->get_id(), 'medziaga', 'Medžiaga');
        productCustomTags($product->get_id(), 'stilius', 'Stilius');
        productCustomTags($product->get_id(), 'ilgis', 'Ilgis');
        productCustomTags($product->get_id(), 'filtras', 'Filtras');
        ?>

        <?php do_action( 'woocommerce_product_meta_end' ); ?>

    </div>

<?php } ?>