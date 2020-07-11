<?php
declare(strict_types=1);

namespace Wkdks\SyliusExamplePlugin\Block;

use Wkdks\SyliusExamplePlugin\Entity\Configuration;
//use Wkdks\SyliusExamplePlugin\Repository\MessageRepositoryInterface;
use Sonata\BlockBundle\Model\Block;
use Sylius\Component\Channel\Context\ChannelContextInterface;
use Sylius\Component\Customer\Context\CustomerContextInterface;
use Sylius\Component\Locale\Context\LocaleContextInterface;

final class MessageBlock extends Block
{
    /**
     * @var ChannelContextInterface
     */
    private $channelContext;

    /**
     * @var LocaleContextInterface
     */
    private $localeContext;

    /**
     * @var CustomerContextInterface
     */
    private $customerContext;

    /**
     * @var MessageRepositoryInterface
     */
    //private $messageRepository;

    /**
     * MessageBlock constructor.
     *
     * @param ChannelContextInterface $channelContext
     * @param LocaleContextInterface $localeContext
     * @param CustomerContextInterface $customerContext
     * @param MessageRepositoryInterface $messageRepository
     */
    public function __construct(
        ChannelContextInterface $channelContext,
        LocaleContextInterface $localeContext,
        CustomerContextInterface $customerContext
        //MessageRepositoryInterface $messageRepository
    ) {
        parent::__construct();
        $this->channelContext = $channelContext;
        $this->localeContext = $localeContext;
        $this->customerContext = $customerContext;
        $this->messageRepository = $messageRepository;
    }

    public function getMessages(): array
    {
        return $this->messageRepository->getActiveMessagesForChannelAndLocale(
            $this->channelContext->getChannel(),
            $this->localeContext->getLocaleCode()
        );
    }

    /**
     * @param Message $message
     *
     * @return bool
     */
    public function canDisplayMessage(Message $message): bool
    {
        return
            !$message->isCustomersOnly()
            || null !== $this->customerContext->getCustomer()
        ;
    }

    /**
     * @param Message $message
     *
     * @return string|null
     */
    public function formatMessageWithTemplate(Message $message): ?string
    {
        $template = $message->getTemplateHtml();
        $template = preg_replace('`{{\s*title\s*}}`i', $message->getTitle(), $template);
        $template = preg_replace('`{{\s*message\s*}}`i', $message->getMessage(), $template);
        return $template;
    }

}
