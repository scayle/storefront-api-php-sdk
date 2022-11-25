<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class CategoryService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\CategoryCollection
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getRoots($options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', 'categories', $combinedOptions, \Scayle\StorefrontApi\Models\CategoryCollection::class);
     }

	/**
	 * Description
	 *
	 * @param array $categoryIds
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\CategoryCollection
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getByIds($categoryIds, $options = [])
	 {
         $combinedOptions = $options;
         $combinedOptions["ids"] = implode(',', $categoryIds);

		 return $this->request('get', 'categories', $combinedOptions, \Scayle\StorefrontApi\Models\CategoryCollection::class);
     }

	/**
	 * Description
	 *
	 * @param int $categoryId
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\Category
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getById($categoryId, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', $this->resolvePath('categories/%s', $categoryId), $combinedOptions, \Scayle\StorefrontApi\Models\Category::class);
     }

	/**
	 * Description
	 *
	 * @param string $categoryPath
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\Category
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getByPath($categoryPath, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', $this->resolvePath('categories/%s', $categoryPath), $combinedOptions, \Scayle\StorefrontApi\Models\Category::class);
     }

}