"use client"

import { MapPin, Phone, Clock } from "lucide-react"
import { useLanguage } from "@/contexts/language-context"

export default function ContactSection() {
  const { t } = useLanguage()

  return (
    <section className="py-16 bg-primary text-white">
      <div className="container mx-auto px-4">
        <div className="grid md:grid-cols-2 gap-12">
          <div>
            <h2 className="text-3xl font-bold mb-6">{t("contact.title")}</h2>

            <div className="space-y-6">
              <div className="flex items-start">
                <MapPin className="w-6 h-6 mr-4 flex-shrink-0 mt-1" />
                <div>
                  <h3 className="font-bold mb-2">{t("contact.headquarters")}</h3>
                  <p>Số 60 - 62 Nguyễn Văn Của Phường 13 Quận 8 Thành Phố Hồ Chí Minh</p>
                </div>
              </div>

              <div className="flex items-start">
                <Phone className="w-6 h-6 mr-4 flex-shrink-0 mt-1" />
                <div>
                  <h3 className="font-bold mb-2">{t("contact.hotline")}</h3>
                  <p>0901456380 - 0902.685.485</p>
                </div>
              </div>

              <div className="flex items-start">
                <Clock className="w-6 h-6 mr-4 flex-shrink-0 mt-1" />
                <div>
                  <h3 className="font-bold mb-2">{t("footer.workingHours")}</h3>
                  <p>7:00 am - 5:30 pm</p>
                </div>
              </div>
            </div>
          </div>

          <div>
            <h2 className="text-3xl font-bold mb-6">{t("contact.register.title")}</h2>
            <p className="mb-6">{t("contact.register.description")}</p>

            <form className="space-y-4">
              <div>
                <input
                  type="text"
                  placeholder={t("contact.form.name")}
                  className="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary text-gray-800"
                />
              </div>

              <div>
                <input
                  type="tel"
                  placeholder={t("contact.form.phone")}
                  className="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary text-gray-800"
                />
              </div>

              <div>
                <input
                  type="email"
                  placeholder={t("contact.form.email")}
                  className="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary text-gray-800"
                />
              </div>

              <button
                type="submit"
                className="w-full bg-secondary text-primary font-bold py-3 px-4 rounded-md hover:bg-opacity-90 transition-colors"
              >
                {t("contact.form.submit")}
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
  )
}
