"use client"

import { Accordion, AccordionContent, AccordionItem, AccordionTrigger } from "@/components/ui/accordion"
import { useLanguage } from "@/contexts/language-context"

export default function FaqSection() {
  const { t } = useLanguage()

  return (
    <section className="py-16 bg-gray-50">
      <div className="container mx-auto px-4">
        <h2 className="section-title">{t("faq.title")}</h2>

        <div className="max-w-3xl mx-auto">
          <Accordion type="single" collapsible className="space-y-4">
            <AccordionItem value="item-1" className="bg-white rounded-lg shadow-sm">
              <AccordionTrigger className="px-6 py-4 text-primary font-medium text-left">
                {t("faq.q1")}
              </AccordionTrigger>
              <AccordionContent className="px-6 pb-4 text-gray-600">{t("faq.a1")}</AccordionContent>
            </AccordionItem>

            <AccordionItem value="item-2" className="bg-white rounded-lg shadow-sm">
              <AccordionTrigger className="px-6 py-4 text-primary font-medium text-left">
                {t("faq.q2")}
              </AccordionTrigger>
              <AccordionContent className="px-6 pb-4 text-gray-600">{t("faq.a2")}</AccordionContent>
            </AccordionItem>

            <AccordionItem value="item-3" className="bg-white rounded-lg shadow-sm">
              <AccordionTrigger className="px-6 py-4 text-primary font-medium text-left">
                {t("faq.q3")}
              </AccordionTrigger>
              <AccordionContent className="px-6 pb-4 text-gray-600">{t("faq.a3")}</AccordionContent>
            </AccordionItem>

            <AccordionItem value="item-4" className="bg-white rounded-lg shadow-sm">
              <AccordionTrigger className="px-6 py-4 text-primary font-medium text-left">
                {t("faq.q4")}
              </AccordionTrigger>
              <AccordionContent className="px-6 pb-4 text-gray-600">{t("faq.a4")}</AccordionContent>
            </AccordionItem>

            <AccordionItem value="item-5" className="bg-white rounded-lg shadow-sm">
              <AccordionTrigger className="px-6 py-4 text-primary font-medium text-left">
                {t("faq.q5")}
              </AccordionTrigger>
              <AccordionContent className="px-6 pb-4 text-gray-600">{t("faq.a5")}</AccordionContent>
            </AccordionItem>
          </Accordion>
        </div>
      </div>
    </section>
  )
}
