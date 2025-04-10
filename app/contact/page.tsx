"use client"

import { useLanguage } from "@/contexts/language-context"
import { MapPin, Phone, Mail, MessageSquare } from "lucide-react"

export default function ContactPage() {
  const { t } = useLanguage()

  return (
    <div>
      <div className="bg-primary text-white py-16">
        <div className="container mx-auto px-4 text-center">
          <h1 className="text-4xl font-bold mb-4">{t("contact.page.title")}</h1>
          <p className="text-xl">{t("contact.page.subtitle")}</p>
        </div>
      </div>

      <div className="py-16">
        <div className="container mx-auto px-4">
          <div className="grid md:grid-cols-2 gap-12">
            <div>
              <h2 className="text-2xl font-bold text-primary mb-6">{t("contact.form.title")}</h2>
              <form className="space-y-4">
                <div>
                  <input
                    type="text"
                    placeholder={t("contact.form.name")}
                    className="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary"
                  />
                </div>

                <div>
                  <input
                    type="tel"
                    placeholder={t("contact.form.phone")}
                    className="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary"
                  />
                </div>

                <div>
                  <input
                    type="email"
                    placeholder={t("contact.form.email")}
                    className="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary"
                  />
                </div>

                <div>
                  <textarea
                    placeholder={t("contact.form.message")}
                    rows={5}
                    className="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary"
                  ></textarea>
                </div>

                <button
                  type="submit"
                  className="bg-primary text-white px-6 py-3 rounded-md font-medium hover:bg-opacity-90 transition-colors"
                >
                  {t("contact.form.send")}
                </button>
              </form>
            </div>

            <div>
              <h2 className="text-2xl font-bold text-primary mb-6">{t("contact.info.title")}</h2>

              <div className="space-y-6">
                <div className="flex items-start">
                  <MapPin className="w-6 h-6 mr-4 flex-shrink-0 mt-1 text-primary" />
                  <div>
                    <h3 className="font-bold mb-2">{t("contact.headquarters")}</h3>
                    <p className="text-gray-600">Số 60 - 62 Nguyễn Văn Của Phường 13 Quận 8 Thành Phố Hồ Chí Minh</p>
                  </div>
                </div>

                <div className="flex items-start">
                  <Phone className="w-6 h-6 mr-4 flex-shrink-0 mt-1 text-primary" />
                  <div>
                    <h3 className="font-bold mb-2">{t("contact.hotline")}</h3>
                    <p className="text-gray-600">0901456380 - 0902.685.485</p>
                  </div>
                </div>

                <div className="flex items-start">
                  <Mail className="w-6 h-6 mr-4 flex-shrink-0 mt-1 text-primary" />
                  <div>
                    <h3 className="font-bold mb-2">Email</h3>
                    <p className="text-gray-600">Ha.kindergarten.edu@gmail.com</p>
                  </div>
                </div>

                <div className="flex items-start">
                  <MessageSquare className="w-6 h-6 mr-4 flex-shrink-0 mt-1 text-primary" />
                  <div>
                    <h3 className="font-bold mb-2">Social</h3>
                    <p className="text-gray-600">@ha.kindergarten</p>
                  </div>
                </div>
              </div>

              <div className="mt-8">
                <h3 className="font-bold text-xl mb-4">{t("contact.map.title")}</h3>
                <div className="bg-gray-200 h-64 rounded-lg flex items-center justify-center">
                  <p className="text-gray-500">Google Map Embed</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
